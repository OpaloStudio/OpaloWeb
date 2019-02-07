<script>
    $(function () {

        $("#zonaAlexFerez").niceScroll(".wrap", {
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
            .setClassToggle('#imgAlex1', 'show')
            .on("end", function (event) {
                $('#imgAlex1').toggleClass('hide');
                console.log("hola")
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#dos',
                duration: 320
            })
            .setClassToggle('#imgAlex2', 'show')
            .on("end", function (event) {
                $('#imgAlex2').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

        new ScrollMagic.Scene({
                triggerElement: '#tres',
                duration: 320
            })
            .setClassToggle('#imgAlex3', 'show')
            .on("end", function (event) {
                $('#imgAlex3').toggleClass('hide');
            })
            .addIndicators()
            .addTo(controller); // Add Scene to ScrollMagic Controller

       


    });
</script>