<script>
    $(function () {

        $("#zonaProtoplasma").niceScroll(".wrap", {
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
            .setClassToggle('#imgProto1', 'show')
            .on("end", function (event) {
                $('#imgProto1').toggleClass('hide');
                console.log("hola")
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#dos',
                duration: 320
            })
            .setClassToggle('#imgProto2', 'show')
            .on("end", function (event) {
                $('#imgProto2').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tres',
                duration: 200
            })
            .setClassToggle('#imgProto3', 'show')
            .on("end", function (event) {
                $('#imgProto3').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#cuatro',
                duration: 200
            })
            .setClassToggle('#imgProto4', 'show')
            .on("end", function (event) {
                $('#imgProto4').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#cinco',
                duration: 200
            })
            .setClassToggle('#imgProto5', 'show')
            .on("end", function (event) {
                $('#imgProto5').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

       


    });
</script>