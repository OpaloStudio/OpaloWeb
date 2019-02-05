<script>
    $(function () {
        var $d3 = $(".sliderUno");

        $(".sliderUno").ionRangeSlider({
            skin: "round",
            min: 0,
            max: 12,
            from: 6,
            min_postfix: "mes",
            postfix: " meses",
            grid: true
        });

        $d3.on("change", function () {
        var $inp = $(this);
        var from = $inp.prop("value"); // reading input value
    
        $("#labelTiempo").html(from);
    });

        var $d4 = $(".sliderDos");

        $d4.ionRangeSlider({
            skin: "round",
            type: "double",
            min: 15000,
            max: 500000,
            from: 25000,
            to: 100000,
            step: 1000,
            max_postfix: "+",
            prefix: "$",
            prettify_enabled: true,
            prettify_separator: ",",
            grid: true
        });

        $d4.on("change", function () {
            var $inp = $(this);
            var from = $inp.data("from"); // input data-from attribute
            var to = $inp.data("to"); // input data-to attribute

            //console.log(from, to); // all values
            $("#labelPresupuesto1").html(from);
            $("#labelPresupuesto2").html(to);

        });

        $(".containerCotizador").niceScroll({
            scrollspeed: 60,
            autohidemode: 'hidden',
            smoothscroll: true,
            bouncescroll: true
        });



        /*
        $("#flat-slider")
            .slider({
                max: 50,
                min: 0,
                range: true,
                values: [15, 35]
            })
            .slider("pips", {
                first: "pip",
                last: "pip"
            });
                     */


    });
</script>