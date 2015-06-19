$(document).ready(function(){

    var fotos = $('.fotos').find('img');

    fotos.on('click',function(ev){
        ev.preventDefault();

        var ruta = $(this).attr('src');
        var alt = $(this).attr('alt');

        $('body').append("<div id='modal'><img class='img-thumbnail' id='imgGrande' src='"+ruta+"' alt='"+alt+"'/></div>");

        $('#modal').click(function(ev){
           $(this).remove();
        });
    });
});