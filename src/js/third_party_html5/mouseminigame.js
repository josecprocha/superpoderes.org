// Cuantas cajas queremos (segun tamaño)
var cajas = 900;
var puntos = 0;
var puntos_creados = 0;

// Funcion de movimiento
function _mueve_cajas(){
    $('.movible').each(function(){
        if ($(this).data('m') == '1'){
            var left = $(this).position().left;
            $(this)
              .animate({ left : (left + 80)+'px' }, 1500)
              .animate({ left : left + 'px' }, 1500);
        }
        else{
            var top = $(this).position().top;
            $(this)
              .animate({ top : (top + 80)+'px' }, 1500)
              .animate({ top : top + 'px' }, 1500);
        }

    });
    x = setTimeout("_mueve_cajas()", 4000);
}

// Funcion para crear mapa nuevo
function _crear_cajas(){
    // Primero pintamos las cajas
    t = 0;
    for (var i = 0; i < cajas; i++){
        setTimeout(function(){
            r = Math.random();
            if (r > 0.3){
                $('.contiene_juego').append('<div class="a"></div>');
            }else{
                $('.contiene_juego').append('<div class="b"></div>');
            };
        }, t);
        t = t + 1.5;
    };
    // Despues de pintar ponermos puntos y
    // marcamos B como reset
    setTimeout(function(){
        $('.contiene_juego .a').each(function(){
            r = Math.floor((Math.random() * 100) +1);
            if (r < 4){
                puntos_creados = puntos_creados +1;
                $(this).addClass('point');
                // Accion de click
                $(this).click(function(){
                    puntos = puntos +1;
                    $('.puntos span').html(puntos);
                    $(this).removeClass('point');
                    // Si no hay mas bolas YOU WIN
                    if (puntos == puntos_creados && puntos != 0){
                        alert('You win!');
                        _reset();
                    }
                });
            };
        });

        // Recorremos B y hacemos un append a su posicion de una caja
        // con z-index y animacion
        //console.log('----------');
        $('.contiene_juego .b').each(function(){
            r = Math.random();
            if  (r < 0.02){

                var left = $(this).position().left;
                var top = $(this).position().top;
                tipo = Math.floor((Math.random() * 2) +1);

                //determinamos maximo de top y left
                if (tipo == 1){
                    if (left > 780){left = 780}
                }else{
                    if (top > 304){top = 304}
                }
                  $('.contiene_juego')
                    .append('<div class="b'
                            +tipo+' movible" style="top:'
                            +top+'px;left:'
                            +left+'px" data-m="'
                            +tipo+'"></div>');
              // Borramos el que no se mueve
               $(this).attr('class', 'a');

            }
        });

        // Si pasamos por las cajas negras
        $('.contiene_juego .b,.contiene_juego .b1,.contiene_juego .b2')
          .hover(function(){
              alert('YOU LOSE! -- Points achived: '+puntos+'');
              _reset();
        });


     }, t + 500);

     // Hacemos que se muevan
     setTimeout(function(){
         _mueve_cajas();
     }, t + 600);
}

// Funcion de resetar mapa
function _reset(){
    $('.contiene_juego div').remove();
    puntos = 0;
    puntos_creados = 0;
    $('.puntos span').html('0');
    _crear_cajas();
}


// Iniciar el juego
_crear_cajas();
