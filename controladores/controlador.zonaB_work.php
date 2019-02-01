<script>
    function animateCss(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }


    var x = -1;

    $(function () {
        x = x + 1;

        text = "Ludicultura";
        var imagen = document.getElementById("imgWork");
        imagen.src = "vistas/img/portafolio/ludicultura/logo1.png";
        $("#linkWork").attr("href", "?page=5");
        animateCss('.nombreProyecto', 'bounceInUp');



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
                    imagen.src = "vistas/img/portafolio/ludicultura/logo1.png";
                    $("#linkWork").attr("href", "?page=5");
                    });
                    break;

                case 1:
                    text = "Floyd";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/floyd/floyd.jpg";
                        $("#linkWork").attr("href", "?page=6");
                    });
                    console.log(x);
                    break;

                case 2:
                    text = "Lookgeo";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/lookgeo/logo.png";
                        $("#linkWork").attr("href", "?page=7");
                    });
                    break;

                case 3:
                    text = "PaoPetite";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/paopetite/paopettit.jpg";
                        $("#linkWork").attr("href", "?page=8");
                    });
                    break;

                case 4:
                    text = "Protoplasma";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/protoplasma/logo.png";
                        $("#linkWork").attr("href", "?page=9");
                    });
                    break;

                case 5:
                    text = "Cumbre";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/cumbre/logo.png";
                        $("#linkWork").attr("href", "?page=10");
                    });
                    break;

                case 6:
                    text = "Alex Ferez";
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/alexferez/logo.png";
                        $("#linkWork").attr("href", "?page=11");
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