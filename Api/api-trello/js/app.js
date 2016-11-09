/**
 * Created by tiw on 08/11/2016.
 */
$(document).ready(function(){
var authenticationSuccess = function() { console.log('Successful authentication'); };
var authenticationFailure = function() { console.log('Failed authentication'); };
Trello.authorize({
    type: 'popup',
    name: 'Getting Started Application',
    scope: {
        read: 'true',
        write: 'true' },
    expiration: 'never',
    success: authenticationSuccess,
    error: authenticationFailure
});

    var menber = Trello.get('/boards/8a7215947a97be43abd761346a5e0d56/lists');
    console.log(menber);
});
