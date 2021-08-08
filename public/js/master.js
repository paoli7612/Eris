var follow = function(button, id) {
    var i = button.getElementsByTagName('i')[0];
    if (i.className == 'fas fa-bookmark') {
        i.className = 'far fa-bookmark';
    } else {
        i.className = 'fas fa-bookmark';
    }
    $.getJSON('api/follow/' + id).done(function(e) {
        console.log(e);
    });
}