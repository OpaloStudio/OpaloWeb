<script>
  /*  function animateCss(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }
*/

    var x = -1;

    $(function () {
        x = x + 1;

        text = "Ludicultura";
        var imagen = document.getElementById("imgWork");
        imagen.src = "vistas/img/portafolio/ludicultura/1.png";
        $("#linkWork").attr("href", "?page=5");
        animateCss('.nombreProyecto', 'bounceInUp');
        $('.zonaA').css('background-color', 'white');



        document.getElementById("proyecto").textContent = text;

    });

    function sumar() {

        if (x < 6) {
            x = x + 1;

            switch (x) {
                case 0:
                    text = "Ludicultura";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/ludicultura/1.png";
                        $("#linkWork").attr("href", "?page=5");
                        $('.zonaA').css('background-color', '#FFFFFF');
                    });
                    break;

                case 1:
                    text = "Floyd";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/floyd/1.png";
                        $("#linkWork").attr("href", "?page=6");
                        $('.zonaA').css('background-color', '#3c3737');
                    });
                    console.log(x);
                    break;

                case 2:
                    text = "Lookgeo";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/lookgeo/1.png";
                        $("#linkWork").attr("href", "?page=7");
                        $('.zonaA').css('background-color', '#FE674C');
                    });
                    break;

                case 3:
                    text = "PaoPetite";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/paopetite/1.jpg";
                        $("#linkWork").attr("href", "?page=8");
                        $('.zonaA').css('background-color', '#F7CED7');
                    });
                    break;

                case 4:
                    text = "Protoplasma";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/protoplasma/1.png";
                        $("#linkWork").attr("href", "?page=9");
                        $('.zonaA').css('background-color', '#464646');
                    });
                    break;

                case 5:
                    text = "Cumbre con causa";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/cumbre/1.png";
                        $("#linkWork").attr("href", "?page=10");
                        $('.zonaA').css('background-color', '#F9B036');
                    });
                    break;

                case 6:
                    text = "Alex Ferez";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/alexferez/1.png";
                        $("#linkWork").attr("href", "?page=11");
                        $('.zonaA').css('background-color', '#F3F3F3');
                    });
                    break;

                    //default:
                    //text = "No value found";
            }

            //document.getElementById("proyecto").textContent = text;
            //cambiarImagen();




        } else {
            x = -1;
            sumar();

        }
    }
</script>