<script>
var abierto = 0;




function mostrarVideo() {
            //$('.videin').toggleClass('grande');
            //$('.barra').toggleClass('quitar');
            $('.menu-wrapper').addClass('quitar');
            $('.pagina').addClass('quitar');
            $('.zonaB').addClass('moverZonaB');
            $('.btnVideon').empty();
            $('.area').html(' <button class="btnVideon" onclick="quitarVideo()"><i class="fas fa-arrow-left"></i></button>');
}


function quitarVideo() {
            $('.menu-wrapper').removeClass('quitar');
            $('.zonaB').removeClass('moverZonaB');
            $('.pagina').removeClass('quitar');
            $('.btnVideon').empty();
            $('.area').html(' <button class="btnVideon" onclick="mostrarVideo()"><i class="fas fa-arrow-right"></i></button>');
}
      
       
       
    /*
function animateCss(element, animationName, callback) {
    const node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}*/
    $(function () {

var abierto;

        $(".zonaScroll").niceScroll({
            cursoropacitymax: 0,
            cursorcolor: "transparent",
            cursorborder: "1px solid transparent",
            autohidemode: 'hidden',
            smoothscroll: true,
            bouncescroll: true
        });

       

        var controller1 = new ScrollMagic.Controller();
        new ScrollMagic.Scene({
                triggerElement: '#tile15',
                duration: 300
            })
            //.setClassToggle('#tile1', 'mover')
            .on("start", function (event) {
                pag1 = 0;
                aparecer(pag1);
                console.log(pag1);
                //$('#imgLookgeo2').toggleClass('hide');
            })
            .on("end", function (event) {
                if (pag1 == 1){
                    pag1 = 3;
                    aparecer(pag1);
                } else if (pag1 == 4){
                    pag1 = 3;
                    aparecer(pag1);
                }
            })
            //.addIndicators()
            .addTo(controller1); // Add Scene to ScrollMagic controller1


        new ScrollMagic.Scene({
                triggerElement: '#tile25',
                duration: 200
            })
            //.setClassToggle('#tile2', 'mover')
            .on("start", function (event) {
                if (pag1 == 0){
                    pag1 = 1;
                    aparecer(pag1);
                } else if (pag1 == 3){
                    pag1 = 1;
                    aparecer(pag1);
                }
            })
            .on("end", function (event) {
                if (pag1 == 2){
                    pag1 = 4;
                    aparecer(pag1);
                } else {
                    console.log(pag1);
                }
            })
            //.addIndicators()
            .addTo(controller1); // Add Scene to ScrollMagic controller1

        new ScrollMagic.Scene({
                triggerElement: '#tile35',
                duration: 300
            })
            //.setClassToggle('#tile3', 'mover')
            .on("start", function (event) {
                if (pag1 == 1){
                    pag1 = 2;
                    aparecer(pag1);
                } else if (pag1 == 4){
                    pag1 = 2;
                    aparecer(pag1);
                }
            })
            .on("end", function (event) {
                if (pag1 == 2){
                    pag1 = 1;
                    aparecer();
                } else {
                    console.log(pag1);
                }
            })
            //.addIndicators()
            .addTo(controller1); // Add Scene to ScrollMagic controller1


            function aparecer(pag1){
                switch (pag1) {
                    case 0:
                       // animateCss('.tile2', 'fadeOutLeft', function () {
                          //  $('.tile2').hide();
                            $('.tile1').show();
                            animateCss('.tile1', 'fadeInRight');
                            $('#loc').text("1");
                       // });


                        console.log(pag1);
                        break;

                    case 1:
                        animateCss('.tile1', 'fadeOutLeft', function () {
                            $('.tile1').hide();
                            $('.tile2').show();
                            animateCss('.tile2', 'fadeInRight');
                            $('#loc').text("2");
                            animateCss('#loc', 'bounceInDown');
                        });

                        console.log(pag1);
                        break;

                    case 2:
                        animateCss('.tile2', 'fadeOutLeft', function () {
                            $('.tile2').hide();
                            $('.tile3').show();
                            animateCss('.tile3', 'fadeInRight');
                            $('#loc').text("3");
                        });
                        animateCss('#loc', 'bounceInDown');
                        console.log(pag1);
                        break;

                    case 3:
                        animateCss('.tile2', 'fadeOutLeft', function () {
                            $('.tile2').hide();
                            $('.tile1').show();
                            animateCss('.tile1', 'fadeInRight');
                            $('#loc').text("1");
                            animateCss('#loc', 'bounceInDown');
                        });
                        console.log(pag);
                        break;

                    case 4:
                        animateCss('.tile3', 'fadeOutLeft', function () {
                            $('.tile3').hide();
                            $('.tile2').show();
                            animateCss('.tile2', 'fadeInRight');
                            $('#loc').text("2");
                            animateCss('#loc', 'bounceInDown');
                        });
                        console.log(pag1);
                        break;



                }
            }
            

        

       




    });
</script>