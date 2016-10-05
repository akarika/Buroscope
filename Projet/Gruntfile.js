module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
            dist: {
                src: ['js/bt_more.js', 'js/scrool.js', 'js/slide.js',
                    'js/sticky.js', 'js/sound.js'
                ],
                dest: 'js/app.js',
            },
            css: {
                src: ['css/reset.css', 'css/slide.css', 'css/st.css', '!css/*.min.css'],
                dest: 'css/style.css',
            },
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'css',
                    ext: '.min.css'
                }]
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            dist: {
                files: {
                    'js/app.min.js': ['js/app.js', 'js/*.min.js']
                }
            }
        },
        watch: {
            js: {
                files: ['js/*.js', '!js/min.js', '!js/jquery-3.1.0.min.js', '!js/slideout.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            },
            css: {
                files: ['!css/*.min.css', 'css/*.css'],
                tasks: ['concat', 'cssmin'],
                options: {
                    spawn: false
                }
            }
        },
        imagemin: {                          // Task
            dist: {                         // Another target
                files: [{
                    expand: true,                  // Enable dynamic expansion
                    cwd: 'img/',                   // Src matches are relative to this path
                    src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
                    dest: 'dist/'                  // Destination path prefix
                }]
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');

};
