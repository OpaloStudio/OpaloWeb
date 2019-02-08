<div class="containerCotizador">
  <div class="flexContacto">
    <h1 class="tituloContacto">Cotizador</h1>
  </div>
  <form class="formContacto">
    <div class="dosInputs">
      <div class="inputs2 ">
        <span class="labelInput posicion">Nombre</span><br>
        <input class="inputContacto2" type="text" name="firstname">
      </div>
      <div class="inputs2 ">
        <span class="labelInput posicion">E-mail</span><br>
        <input class="inputContacto2" type="text" mail="mail">
      </div>
    </div><br>
    <div class=" full">
      <div class="inputFlex">
        <span class="labelInput posicion2">Compañía </span>
        <input class="inputContacto3" type="text" name="firstname">
      </div>
    </div>
    <div class="flexContacto">
      <h1 class="tituloContacto">Tipo de Proyecto</h1>
    </div>

    <div class="flexBotones">
      <div class="zonaBotones">
        <button class="btnFormulario" id="btn1"  type="button">Branding</button>
        <button class="btnFormulario" id="btn2"  type="button">Web-site</button>
        <button class="btnFormulario" id="btn3"  type="button">Copy-wrating</button>
        <button class="btnFormulario" id="btn4"  type="button">Publicidad</button>
        <button class="btnFormulario" id="btn5"  type="button">Software</button>
        <button class="btnFormulario" id="btn6"  type="button">Otro</button>
      </div>
    </div>
    <br><br>
    <div class="otroTipo ">
      <input class="proyecto" type="text" name="lastname" placeholder="Escribe el tipo de proyecto">
    </div>
    <div class="inputs">
      <span class="labelInput">Describe tu proyecto</span>
      <textarea class="cajaDescripcion" name="message" rows="10"></textarea>
    </div>
    <br>
    <div class="flexContacto">
      <h1 class="tituloContacto">Tiempo y presupuesto</h1>
    </div>
    <div class="sliders">
      <div class="colorcin">
        <span class="labelInput">Tiempo: </span><span class="labelInput" id="labelTiempo"></span><span class="labelInput"> meses</span>
        <br><br>
        <input type="text" class="sliderUno" name="my_range" value="" /> <br>
        <span class="labelInput">Presupuesto: $</span><span class="labelInput" id="labelPresupuesto1"></span><span class="labelInput"> - $</span><span class="labelInput" id="labelPresupuesto2"></span>
        <br><br>
        <input type="text" class="sliderDos" name="my_range" value="" />
      </div>
      <br><br>

      <div id="sliders">
        <div id="flat-slider"></div>
      </div>
    </div>

    <div class="zonaBtnSubmit">
      <input class="btnSubmit" type="submit" value="Enviar">
    </div>
  </form>
</div>