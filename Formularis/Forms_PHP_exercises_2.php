<?php
//PHP con las variables
      error_reporting (0);
      $nombre = "$_GET[nombre] <br>";
      $email = "$_GET[email] <br>";
      $navegadores = "$_GET[navegadores] <br>";
      $genero = "$_GET[genero] <br>";
      $terminos = "$_GET[terminos] <br>";
      $contraseña = "$_GET[contraseña] <br>";
      $fecha = "$_GET[fecha] <br>";
      $comentario = "$_GET[comentario] <br>";
      $curso = "$_GET[curso] <br>";
?>

<HTML>
<head>
    <meta charset="UTF-8">
    <title>Formulario Basico</title>
</head>
<body>
  <h1>Formulario Basico</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">

        Nombre completo:
        <input type="text" name="nombre">

        <br><br> e-mail:
        <input type="text" name="email">

        <br><br> Navegadores que conoces:
        <br>
        <select name="navegadores" multiple>
            <option value="Chrome">Chrome</option>
            <option value="Safari">Safari</option>
            <option value="MozillaFirefox">Mozilla Firefox</option>
            <option value="Opera">Opera</option>
        </select>

        <br><br> Genero:
        <br>
        <input type="radio" id="Hombre" name="genero" value="Hombre">
        <label for="Hombre">Hombre</label><br>
        <input type="radio" id="Mujer" name="genero" value="Mujer">
        <label for="Mujer">Mujer</label><br>
        <input type="radio" id="Otro" name="genero" value="Otro">
        <label for="Otro">Otro</label>

        <br><br> Condiciones y terminos: <input type="checkbox" name="terminos" value="agreed">

        <br><br> Contraseña:
        <br>
        <input type="password" name="contraseña">

        <br><br> Fecha de nacimiento:
        <br>
        <input type="date" name="fecha">

        <br><br> Comentario:
        <br>
        <textarea name="comentario" rows="5" cols="40"></textarea>

        <br><br> Que curso estas estudiando:
        <br>
        <input type="radio" id="DAW" name="curso" value="DAW">
        <label for="DAW">DAW</label><br>
        <input type="radio" id="ASIX" name="curso" value="ASIX">
        <label for="ASIX">ASIX</label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
  <hr>
</body>
</HTML>






<?php
//PHP con los echos
      echo "<h1>Resultado</h1>";
      echo "<b>Tu nombre es: </b>" .$nombre. "<br>";
      echo "<b>Tu email es: </b>" .$email. "<br>";
      echo "<b>Tu navegador es: </b>" .$navegadores. "<br>";
      echo "<b>Tu genero es: </b>" .$genero. "<br>";
      echo "<b>Condiciones y terminos: </b>" .$terminos. "<br>";
      echo "<b>Tu contrassenya es: </b>" .$contraseña. "<br>";
      echo "<b>Tu fecha de nacimiento es:</b> " .$fecha. "<br>";
      echo "<b>Tu comentari es: </b>" .$comentario. "<br>";
      echo "<b>Tu curso es: </b>" .$curso. "<br>";
?>
