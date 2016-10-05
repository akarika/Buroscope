
<?php if (isset($messages)) : ?>
    <?php foreach ($messages as $key => $value) : ?>
        <div class="row messageItem" data-id="<?php echo $value['id'];?>">
            <div class="user col-md-3">
                <?php  if(!empty($value["url_avatar"])){
                    echo '<img class="img-responsive" src="' .$basepath.$value['url_avatar'].'">';
                }else{
                    echo '<img class="img-responsive" src="'.$basepath.'img/avatar.png">';
                }
                ?>
                <?php echo "<br>";?>

                <?php echo $value["pseudo"];?>
                <?php echo date("d-m-Y H:i",strtotime($value["created_date"]));?>
            </div>
            <div class="content col-md-9">
                <?php echo stripslashes($value["content"]) ?>
                <?php if (!empty($value["url_file"])): ?>
                    <hr/>
                    <a href="<?php echo $basepath.$value['url_file']; ?>">
                        <?php
                        $extAuth = array("jpeg", "jpg", "png", "gif", "svg");
                        $ext = getExtension($value['url_file']);
                        if (in_array($ext, $extAuth)) {
                            echo '<img class="img-responsive" src="' .$basepath.$value['url_file'].'">';
                        } else {
                            echo "Pièce jointe : .".$ext;
                        };
                        ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>