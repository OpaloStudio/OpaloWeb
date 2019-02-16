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
                if (pag == 1) {
                    pag = 0;
                    aparecer(pag);
                } 
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#tile25',
                duration: 300
            })
            //.setClassToggle('#tile2', 'mover')
            .on("start", function (event) {
                if (pag == 0) {
                    pag = 1;
                    aparecer(pag);
                } 
            })
            .on("end", function (event) {
                if (pag == 2) {
                    pag = 1;
                    aparecer(pag);
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
                if (pag == 1) {
                    pag = 2;
                    aparecer(pag);
                } 
            })
            .on("end", function (event) {
                if (pag == 3) {
                    pag = 2;
                    aparecer(pag);
                } 
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tile45',
                duration: 300
            })
            //.setClassToggle('#tile3', 'mover')
            .on("start", function (event) {
                if (pag == 2) {
                    pag = 3;
                    aparecer(pag);
                } 
            })
            .on("end", function (event) {
                if (pag == 4) {
                    pag = 3;
                    aparecer(pag);
                }
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tile55',
                duration: 300
            })
            //.setClassToggle('#tile3', 'mover')
            .on("start", function (event) {
                if (pag == 3) {
                    pag = 4;
                    aparecer(pag);
                }
            })
            .on("end", function (event) {
                if (pag == 5) {
                    pag = 4;
                    aparecer(pag);
                } 
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tile65',
                duration: 300
            })
            //.setClassToggle('#tile3', 'mover')
            .on("start", function (event) {
                if (pag == 4) {
                    pag = 5;
                    aparecer(pag);
                }
            })
            .on("end", function (event) {
                if (pag == 6) {
                    pag = 5;
                    aparecer(pag);
                } 
            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tile75',
                duration: 300
            })
            //.setClassToggle('#tile3', 'mover')
            .on("start", function (event) {
                if (pag == 5) {
                    pag = 6;
                    aparecer(pag);
                } 

            })
            //.addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        function aparecer(pag) {
            switch (pag) {
                case 0:
                text = "Ludicultura";
                $('#loc').text("1");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/ludicultura/1.png";
                        $("#linkWork").attr("href", "?page=5");
                        $('.zonaA').css('background-color', '#FFFFFF');
                        animateCss('.zonaA', 'bounceInDown');
                        
                    });
                    break;

                case 1:
                    text = "Floyd";
                    $('#loc').text("2");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/floyd/1.png";
                        $("#linkWork").attr("href", "?page=6");
                        $('.zonaA').css('background-color', '#3c3737');
                        animateCss('.zonaA', 'bounceInDown');
                        
                    });
                    console.log(x);
                    break;

                    case 2:
                    text = "Lookgeo";
                    $('#loc').text("3");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/lookgeo/1.png";
                        $('.zonaA').css('background-color', '#FE674C');
                        animateCss('.zonaA', 'bounceInDown');
                        $("#linkWork").attr("href", "?page=7");
                        
                    });
                    break;

                case 3:
                    text = "PaoPetite";
                    $('#loc').text("4");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/paopetite/1.png";
                        $("#linkWork").attr("href", "?page=8");
                        $('.zonaA').css('background-color', '#F7CED7');
                        $('.zonaA').css("background-image", "url(vistas/img/portafolio/paopetite/3.png)");  
                        animateCss('.zonaA', 'bounceInDown');
                        
                    });
                    break;

                case 4:
                    text = "Protoplasma";
                    $('#loc').text("5");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/protoplasma/1.png";
                        $("#linkWork").attr("href", "?page=9");
                        $('.zonaA').css('background-color', '#464646');
                        animateCss('.zonaA', 'bounceInDown');
                        
                    });
                    break;

                case 5:
                    text = "Cumbre con causa";
                    $('#loc').text("6");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/cumbre/1.png";
                        $("#linkWork").attr("href", "?page=10");
                        $('.zonaA').css('background-color', '#F9B036');
                        animateCss('.zonaA', 'bounceInDown');
                        
                    });
                    break;

                case 6:
                    text = "Alex Ferez";
                    $('#loc').text("7");
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/alexferez/1.png";
                        $("#linkWork").attr("href", "?page=11");
                        $('.zonaA').css('background-color', '#F3F3F3');
                        animateCss('.zonaA', 'bounceInDown');
                        
                    });
                    break;



            }
        }
    });

    var x = -1;

    $(function () {
        x = x + 1;

        text = "Ludicultura";
        var imagen = document.getElementById("imgWork");
        imagen.src = "vistas/img/portafolio/ludicultura/1.png";
        $("#linkWork").attr("href", "?page=5");
        animateCss('.nombreProyecto', 'bounceInUp');
        $('.zonaA').css('background-color', 'white');
        animateCss('.zonaA', 'bounceInDown');




        document.getElementById("proyecto").textContent = text;

    });

    function sumar() {

        if (x < 6) {
            x = x + 1;

            switch (x) {
                case 0:
                    text = "Ludicultura";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/ludicultura/1.png";
                        $("#linkWork").attr("href", "?page=5");
                        $('.zonaA').css('background-color', '#FFFFFF');
                        animateCss('.zonaA', 'bounceInDown');
                    });
                    break;

                case 1:
                    text = "Floyd";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/floyd/1.png";
                        $("#linkWork").attr("href", "?page=6");
                        $('.zonaA').css('background-color', '#3c3737');
                        animateCss('.zonaA', 'bounceInDown');
                    });
                    console.log(x);
                    break;

                case 2:
                    text = "Lookgeo";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/lookgeo/1.png";
                        $("#linkWork").attr("href", "?page=7");
                        $('.zonaA').css('background-color', '#FE674C');
                        animateCss('.zonaA', 'bounceInDown');
                    });
                    break;

                case 3:
                    text = "PaoPetite";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/paopetite/1.jpg";
                        $("#linkWork").attr("href", "?page=8");
                        $('.zonaA').css('background-color', '#F7CED7');
                        animateCss('.zonaA', 'bounceInDown');
                    });
                    break;

                case 4:
                    text = "Protoplasma";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/protoplasma/1.png";
                        $("#linkWork").attr("href", "?page=9");
                        $('.zonaA').css('background-color', '#464646');
                        animateCss('.zonaA', 'bounceInDown');
                    });
                    break;

                case 5:
                    text = "Cumbre con causa";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/cumbre/1.png";
                        $("#linkWork").attr("href", "?page=10");
                        $('.zonaA').css('background-color', '#F9B036');
                        animateCss('.zonaA', 'bounceInDown');
                    });
                    break;

                case 6:
                    text = "Alex Ferez";
                    animateCss('.zonaA', 'bounceOutDown');
                    animateCss('.nombreProyecto', 'bounceOutUp', function () {
                        document.getElementById("proyecto").textContent = text;
                        animateCss('.nombreProyecto', 'bounceInUp');
                        var imagen = document.getElementById("imgWork");
                        imagen.src = "vistas/img/portafolio/alexferez/1.png";
                        $("#linkWork").attr("href", "?page=11");
                        $('.zonaA').css('background-color', '#F3F3F3');
                        animateCss('.zonaA', 'bounceInDown');
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