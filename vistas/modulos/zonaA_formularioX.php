<div class="containerCotizador">
  <div class="flexContacto">
    <h1 class="tituloContacto">Formulario LMS</h1>
  </div>
  <form class="formContacto" action="modelos/modelo.formularioX.php" method="post">

  <div class=" full">
      <div class="inputFlex">
        <span class="labelInput2 posicion2">Para poder realizar la cotización sobre el sistema solicitado, es necesario
        que se contesten las siguientes preguntas con el motivo de analizar la complejidad de la información 
        que se relacionará en la base de datos. </span>
      </div>
    </div>

    <div class=" full">
      <div class="inputFlex">
        <span class="labelInput posicion2">Nombre de la persona que contesta el formulario </span>
        <input class="inputContacto3" type="text" name="name" required>
      </div>
    </div>

    <div class=" full">
      <div class="inputFlex">
        <span class="labelInput posicion2">Correo </span>
        <input class="inputContacto3" type="email" name="mail" required>
      </div>
    </div>

   
  <div class="inputs">
      <span class="labelInput">Describa la información y documentacion que se pedirá a los usuarios al registrarse</span>
      <textarea class="cajaDescripcion" name="message1" rows="10" required></textarea>
    </div>

    <div class="inputs">
      <span class="labelInput">Describa la información que contienen los eventos o servicios</span>
      <textarea class="cajaDescripcion" name="message2" rows="10" required></textarea>
    </div>

    <div class="inputs">
      <span class="labelInput">Describa la documentación extra que se podría pedir a los elementos cuando se postulen para un evento</span>
      <textarea class="cajaDescripcion" name="message3" rows="10" required></textarea>
    </div>

    <div class="inputs">
      <span class="labelInput">Describa la información que le gustaría poder analizar</span>
      <textarea class="cajaDescripcion" name="message4" rows="10" required></textarea>
    </div>

    <div class="inputs">
      <span class="labelInput">Describa si existen metrícas que se deseen evaluar</span>
      <textarea class="cajaDescripcion" name="message5" rows="10" required></textarea>
    </div>
    
    <div class="inputs">
      <span class="labelInput">Describa si existen características adicionales que se quiera agregar</span>
      <textarea class="cajaDescripcion" name="message6" rows="10" required></textarea>
    </div>

    

    <div class="zonaBtnSubmit">
      <input class="btnSubmit" type="submit" value="Enviar">
    </div>
  </form>
</div>