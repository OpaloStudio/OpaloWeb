<script>
    $(function () {

        var trabajo;

        $("#floydWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/floyd/1.png";
            trabajo = 1;
            linkear();
            $('.zonaA').css('background-color', '#3c3737');
            $('#proyectoFloyd').toggleClass('colorFloyd');
            animateCss('#imgWork', 'zoomIn');
        });

        $("#lookgeoWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/lookgeo/1.png";
            trabajo = 2;
            linkear();
            $('.zonaA').css('background-color', '#FE674C');
            $('#proyectoLookgeo').toggleClass('colorLookgeo');
            animateCss('#imgWork', 'zoomIn');
        });

        $("#paoWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/paopetite/1.png";
            trabajo = 3;
            linkear();
            $('.zonaA').css('background-color', '#F7CED7');
            $('#proyectoPaoPetite').toggleClass('colorPao');
            animateCss('.imgCambiante', 'zoomIn');
        });

        $("#ludiWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/ludicultura/1.png";
            trabajo = 4;
            linkear();
            $('.zonaA').css('background-color', '#FFFFFF');
            $('#proyectoLudi').toggleClass('colorLudi');
            animateCss('#imgWork', 'zoomIn');
        });


        $("#protoWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/protoplasma/1.png";
            trabajo = 5;
            linkear();
            $('.zonaA').css('background-color', '#464646');
            $('#proyectoProtoplasma').toggleClass('colorProto');
            animateCss('.imgCambiante', 'zoomIn');
        });

        $("#cumbreWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/cumbre/1.png";
            trabajo = 6;
            linkear();
            $('.zonaA').css('background-color', '#F9B036');
            $('#proyectoCumbre').toggleClass('colorCumbre');
            animateCss('.imgCambiante', 'zoomIn');
        });

        $("#alexWork").hover(function () {
            var imagen = document.getElementById("imgWork");
            imagen.src = "vistas/img/portafolio/alexferez/1.png";
            trabajo = 7;
            linkear();
            $('.zonaA').css('background-color', '#F3F3F3');
            $('#proyectoAlex').toggleClass('colorAlex');
            animateCss('.imgCambiante', 'zoomIn');
        });

        function linkear(){
        switch (trabajo) {

                    case 1:
                        $(".linkA").attr("href", "?page=6");
                        console.log(trabajo);
                        break;

                    case 2:
                        $(".linkA").attr("href", "?page=7");
                        console.log(trabajo);
                        break;

                    case 3:
                        $(".linkA").attr("href", "?page=8");
                        console.log(trabajo);
                        break;

                    case 4:
                        $(".linkA").attr("href", "?page=5");
                        console.log(trabajo);
                        break;

                    case 5:
                        $(".linkA").attr("href", "?page=9");
                        console.log(trabajo);
                        break;

                    case 6:
                        $(".linkA").attr("href", "?page=10");
                        console.log(trabajo);
                        break;

                    case 7:
                        $(".linkA").attr("href", "?page=11");
                        console.log(trabajo);
                        break;



                }
            }

        
    });



    $(function () {


        $('#proyectoFloyd').css('display','block');
        animateCss('#proyectoFloyd', 'bounceInUp', function () {
            $('#proyectoLookgeo').css('display','block');
            animateCss('#proyectoLookgeo', 'bounceInUp', function () {
                $('#proyectoPaoPetite').css('display','block');
                animateCss('#proyectoPaoPetite', 'bounceInUp', function () {
                    $('#proyectoLudicultura').css('display','block');
                    animateCss('#proyectoLudicultura', 'bounceInUp', function () {
                        $('#proyectoProtoplasma').css('display','block');
                        animateCss('#proyectoProtoplasma', 'bounceInUp', function () {
                            $('#proyectoCumbre').css('display','block');
                            animateCss('#proyectoCumbre', 'bounceInUp', function () {
                                $('#proyectoAlex').css('display','block');
                                animateCss('#proyectoAlex', 'bounceInUp', function () {

                                })
                            })
                        })
                    })
                })
            })
        });
        
/*
    animateCss('#proyectoFloyd', 'zoomIn');
    animateCss('#proyectoLookgeo', 'zoomIn');
    animateCss('#proyectoPaoPetite', 'zoomIn');
    animateCss('#proyectoLudicultura', 'zoomIn');
    animateCss('#proyectoProtoplasma', 'zoomIn');
    animateCss('#proyectoCumbre', 'zoomIn');
    animateCss('#proyectoAlex', 'zoomIn');
 */

    });

    
</script>