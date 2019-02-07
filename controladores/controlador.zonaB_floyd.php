<script>
    $(function () {

        $("#zonaFloyd").niceScroll(".wrap", {
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
            .setClassToggle('#imgFloyd1', 'show')
            .on("end", function (event) {
                $('#imgFloyd1').toggleClass('hide');
                console.log("hola")
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#dos',
                duration: 320
            })
            .setClassToggle('#imgFloyd2', 'show')
            .on("end", function (event) {
                $('#imgFloyd2').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tres',
                duration: 200
            })
            .setClassToggle('#imgFloyd3', 'show')
            .on("end", function (event) {
                $('#imgFloyd3').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

       


    });
</script>