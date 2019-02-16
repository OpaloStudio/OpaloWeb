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

        function activo() {
            this.toggleClass = "activo";
            console.log("yeah");
        }

        $("#btn1").click(function () {
            $("#btn1").toggleClass("activo");
        });
        $("#btn2").click(function () {
            $("#btn2").toggleClass("activo");
        });
        $("#btn3").click(function () {
            $("#btn3").toggleClass("activo");
        });
        $("#btn4").click(function () {
            $("#btn4").toggleClass("activo");
        });
        $("#btn5").click(function () {
            $("#btn5").toggleClass("activo");
        });
        $("#btn6").click(function () {
            $("#btn6").toggleClass("activo");
            $(".proyecto").toggleClass("aparecer");
        });

       
   
    });

    
</script>

<script>
 function copyToClipboard(elemento) {
  var $temp = $("<input>")
  $("body").append($temp);
  $temp.val($(elemento).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
    </script>

<script>
function cotizar(){
    var idNombre = document.getElementById("idNombre").value;
    var idCorreo = document.getElementById("idCorreo").value;
    var idCompany = document.getElementById("idCompany").value;
    document.getElementById("botonAgendar").disabled = true;
    
    $.ajax({
        url: 'modelos/modelo.zonaA_formulario.php',
        type: 'POST',
        data: ({
            idNombre: idNombre,
            idCorreo: idCorreo,
            idCompany: idCompany
        }),
        success: function(msg){
            if(msg == 1){
                alert("Cotización realizada exitosamente, espera la respeusta en tu correo electrónico.");
            }
            else{
                document.getElementById("botonAgendar").disabled = false;
            }

        }
    });
}
</script>