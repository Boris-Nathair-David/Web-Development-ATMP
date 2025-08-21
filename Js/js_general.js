$(document).ready(function(){
    $('#bar-button').click(function() {
    $('.inside-ban1').toggle("slide");
    });
});

$('body').on('hidden.bs.modal', '.modal', function () {
    $('video').trigger('pause');
    });


