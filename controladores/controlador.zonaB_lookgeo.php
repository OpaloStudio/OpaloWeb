<script>
    $(function () {

        $("#zonaLookgeo").niceScroll(".wrap", {
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
                duration: 550
            })
            .setClassToggle('#imgLookgeo1', 'show')
            .on("end", function (event) {
                $('#imgLookgeo1').toggleClass('hide');
                console.log("hola")
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#dos',
                duration: 850
            })
            .setClassToggle('#imgLookgeo2', 'show')
            .on("end", function (event) {
                $('#imgLookgeo2').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tres',
                duration: 780
            })
            .setClassToggle('#imgLookgeo3', 'show')
            .on("end", function (event) {
                $('#imgLookgeo3').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#cuatro',
                duration: 200
            })
            .setClassToggle('#imgLookgeo4', 'show')
            .on("end", function (event) {
                $('#imgLookgeo4').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

       


    });
</script>