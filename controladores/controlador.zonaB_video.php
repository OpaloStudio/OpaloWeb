<script>
 function mostrarVideo() {
            //$('.videin').toggleClass('grande');
            $('.barra').toggleClass('quitar');
            $('.info').toggleClass('quitar');
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
        $(".zonaScroll").niceScroll({
            cursoropacitymax: 0,
            cursorcolor: "transparent",
            cursorborder: "1px solid transparent",
            autohidemode: 'hidden',
            smoothscroll: true,
            bouncescroll: true
        });

       


        var controller = new ScrollMagic.Controller();
        new ScrollMagic.Scene({
                triggerElement: '#tile15',
                duration: 300
            })
            //.setClassToggle('#tile1', 'mover')
            .on("start", function (event) {
                pag = 0;
                aparecer(pag);
                console.log(pag);
                //$('#imgLookgeo2').toggleClass('hide');
            })
            .on("end", function (event) {
                if (pag == 1){
                    pag = 3;
                    aparecer(pag);
                } else if (pag == 4){
                    pag = 3;
                    aparecer(pag);
                }
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#tile25',
                duration: 200
            })
            //.setClassToggle('#tile2', 'mover')
            .on("start", function (event) {
                if (pag == 0){
                    pag = 1;
                    aparecer(pag);
                } else if (pag == 3){
                    pag = 1;
                    aparecer(pag);
                }
            })
            .on("end", function (event) {
                if (pag == 2){
                    pag = 4;
                    aparecer(pag);
                } else {
                    console.log(pag);
                }
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tile35',
                duration: 300
            })
            //.setClassToggle('#tile3', 'mover')
            .on("start", function (event) {
                if (pag == 1){
                    pag = 2;
                    aparecer(pag);
                } else if (pag == 4){
                    pag = 2;
                    aparecer(pag);
                }
            })
            .on("end", function (event) {
                if (pag == 2){
                    pag = 1;
                    aparecer();
                } else {
                    console.log(pag);
                }
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


            function aparecer(pag){
                switch (pag) {
                    case 0:
                       // animateCss('.tile2', 'fadeOutLeft', function () {
                          //  $('.tile2').hide();
                            $('.tile1').show();
                            animateCss('.tile1', 'fadeInRight');
                            $('#loc').text("1");
                       // });


                        console.log(pag);
                        break;

                    case 1:
                        animateCss('.tile1', 'fadeOutLeft', function () {
                            $('.tile1').hide();
                            $('.tile2').show();
                            animateCss('.tile2', 'fadeInRight');
                            $('#loc').text("2");
                            animateCss('#loc', 'bounceInDown');
                        });

                        console.log(pag);
                        break;

                    case 2:
                        animateCss('.tile2', 'fadeOutLeft', function () {
                            $('.tile2').hide();
                            $('.tile3').show();
                            animateCss('.tile3', 'fadeInRight');
                            $('#loc').text("3");
                        });
                        animateCss('#loc', 'bounceInDown');
                        console.log(pag);
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
                        console.log(pag);
                        break;



                }
            }
            

        

       




    });
</script>