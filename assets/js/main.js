let escribiendo = str => {
    let arrFromStr = str.split('');
    let i = 0;

    let printStr = setInterval(function() {
        document.getElementById('texto_bercode').innerHTML += arrFromStr[i];
        i++;
        if (i === arrFromStr.length) {
            document.getElementById('texto_bercode').innerHTML = "";
            i = 0;
            document.getElementById('texto_bercode').innerHTML = arrFromStr[i];
            i++
        }
    }, 300);
};
escribiendo('Desarrollo Webb');

/* Cambio de Fondo del Menu Principal */
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $("#menu").addClass('animacion_menu');
        $("#menu").addClass('navbar-light');
        $("#menu").addClass('bg-light');
        $("#menu").removeClass('nav-trans');
    } else {
        $("#menu").removeClass('animacion_menu');
        $("#menu").removeClass('navbar-light');
        $("#menu").removeClass('bg-light');
        $("#menu").addClass('nav-trans');
    }
    if ($(this).scrollTop() > 280) {
        $("#myMenu").addClass('ini_bg');
        $("#myMenu").addClass('ini_bg');

    } else {
        $("#myMenu").removeClass('ini_bg');
        $("#myMenu").removeClass('ini_bg');
    }
});

$("#btn_movil").on("click", function() {
    $('#content_menu_movil').addClass('t3-navbar-collapse');
});


/* Animaciones para Clientes */
var sliderTeam = (function(document, $) {

    'use strict';

    var $sliderTeams = $('.slider--teams'),
        $list = $('#list'),
        $listItems = $('#list li'),
        $nItems = $listItems.length,
        $nView = 3,
        autoSlider,
        $current = 0,
        $isAuto = true,
        $acAuto = 2500,

        _init = function() {
            _initWidth();
            _eventInit();
        },

        _initWidth = function() {
            $list.css({
                'margin-left': ~~(100 / $nView) + '%',
                'width': ~~(100 * ($nItems / $nView)) + '%'
            });
            $listItems.css('width', 100 / $nItems + '%');
            $sliderTeams.velocity({ opacity: 1 }, { display: "block" }, { delay: 1000 });
        },

        _eventInit = function() {

            window.requestAnimFrame = (function() {
                return window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    window.msRequestAnimationFrame ||
                    function(callback, element) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();

            window.requestInterval = function(fn, delay) {
                if (!window.requestAnimationFrame &&
                    !window.webkitRequestAnimationFrame &&
                    !window.mozRequestAnimationFrame &&
                    !window.oRequestAnimationFrame &&
                    !window.msRequestAnimationFrame)
                    return window.setInterval(fn, delay);
                var start = new Date().getTime(),
                    handle = new Object();

                function loop() {
                    var current = new Date().getTime(),
                        delta = current - start;
                    if (delta >= delay) {
                        fn.call();
                        start = new Date().getTime();
                    }
                    handle.value = requestAnimFrame(loop);
                };
                handle.value = requestAnimFrame(loop);
                return handle;
            }

            window.clearRequestInterval = function(handle) {
                window.cancelAnimationFrame ? window.cancelAnimationFrame(handle.value) :
                    window.webkitCancelRequestAnimationFrame ? window.webkitCancelRequestAnimationFrame(handle.value) :
                    window.mozCancelRequestAnimationFrame ? window.mozCancelRequestAnimationFrame(handle.value) :
                    window.oCancelRequestAnimationFrame ? window.oCancelRequestAnimationFrame(handle.value) :
                    window.msCancelRequestAnimationFrame ? msCancelRequestAnimationFrame(handle.value) :
                    clearInterval(handle);
            };

            $.each($listItems, function(i) {
                var $this = $(this);
                $this.on('touchstart click', function(e) {
                    e.preventDefault();
                    _stopMove(i);
                    _moveIt($this, i);
                });
            });

            autoSlider = requestInterval(_autoMove, $acAuto);
        },

        _moveIt = function(obj, x) {

            var n = x;

            obj.find('figure').addClass('active');
            $listItems.not(obj).find('figure').removeClass('active');

            $list.velocity({
                translateX: ~~((-(100 / $nItems)) * n) + '%',
                translateZ: 0
            }, {
                duration: 1000,
                easing: [400, 26],
                queue: false
            });

        },

        _autoMove = function(currentSlide) {
            if ($isAuto) {
                $current = ~~(($current + 1) % $nItems);
            } else {
                $current = currentSlide;
            }
            console.log($current);
            _moveIt($listItems.eq($current), $current);
        },

        _stopMove = function(x) {
            clearRequestInterval(autoSlider);
            $isAuto = false;
            _autoMove(x);
        };

    return {
        init: _init
    };

})(document, jQuery);

$(window).load(function() {
    'use strict';
    sliderTeam.init();
});

/* Seccion de Servicios */