<script>
    $(function () {

        $("#zonaCumbre").niceScroll(".wrap", {
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
                duration: 780
            })
            .setClassToggle('#imgCumbre1', 'show')
            .on("end", function (event) {
                $('#imgCumbre1').toggleClass('hide');
                console.log("hola")
            })
            //.addIndicators()()
            .addTo(controller); // Add Scene to ScrollMagic Controller


        new ScrollMagic.Scene({
                triggerElement: '#dos',
                duration: 800
            })
            .setClassToggle('#imgCumbre2', 'show')
            .on("end", function (event) {
                $('#imgCumbre2').toggleClass('hide');
            })
            //.addIndicators()()
            .addTo(controller); // Add Scene to ScrollMagic Controller


    });
</script>