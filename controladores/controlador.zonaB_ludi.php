<script>
    $(function () {

        $("#zonaLudi").niceScroll(".wrap", {
            cursoropacitymax: 0,
            cursorcolor: "transparent",
            cursorborder: "1px solid transparent",
            autohidemode: 'hidden',
            smoothscroll: true,
            bouncescroll: true
        });



        var controller = new ScrollMagic.Controller();
        new ScrollMagic.Scene({
                triggerElement: '#uno',
                duration: 250
            })
            .setClassToggle('#imgLudi1', 'show')
            .on("end", function (event) {
                $('#imgLudi1').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#dos',
                duration: 320
            })
            .setClassToggle('#imgLudi2', 'show')
            .on("end", function (event) {
                $('#imgLudi2').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tres',
                duration: 200
            })
            .setClassToggle('#imgLudi3', 'show')
            .on("end", function (event) {
                $('#imgLudi3').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#cuatro',
                duration: 300
            })
            .setClassToggle('#imgLudi4', 'show')
            .on("end", function (event) {
                $('#imgLudi4').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#cinco',
                duration: 550
            })
            .setClassToggle('#imgLudi5', 'show')
            .on("end", function (event) {
                $('#imgLudi5').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller



        /*
                    var scene2 = new ScrollMagic.Scene({
                        triggerElement: '#dos', // starting scene, when reaching this element
                        //duration: 250 // pin the element for a total of 250px
                    })
                    .on('start', function () {
                        animateCss('#imgLudi1', 'bounceOutUp', function () {
                        $('#imgLudi1').hide();
                        $('#imgLudi2').show();
                        animateCss('#imgLudi2', 'bounceInDown');
                            });  
                    })
                    .addIndicators()
                    .addTo(controller); // Add Scene to ScrollMagic Controller

                    var scene3 = new ScrollMagic.Scene({
                        triggerElement: '#tres', // starting scene, when reaching this element
                        //duration: 250 // pin the element for a total of 250px
                    })
                    .on('start', function () {
                        animateCss('#imgLudi2', 'bounceOutUp', function () {
                        $('#imgLudi2').hide();
                        $('#imgLudi3').show();
                        animateCss('#imgLudi3', 'bounceInDown');
                            });  
                    })
                    .addIndicators()
                    .addTo(controller); // Add Scene to ScrollMagic Controller


        */

    });
</script>