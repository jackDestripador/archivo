<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo</title>
</head>
<body>
    <h1>sistema de archivo</h1>
    <form action="datos.php" method="POST" enctype="multipart/form-data">
<!--
    <p>
    <label for="uploads"> Elige las imágenes que deseas cargar: </label>
    <input
      type="file"
      id="uploads"
      name="uploads"
      accept=".jpg, .jpeg, .png, .svg, .gif"
      multiple />
  </p>-->
        <label>  Unidad administrativa</label>
            <select id="unidadadministartiva" name="unidadadministartiva" >
                <option value="DAM"> Dirección de Asesoría y Mediación</option>
                <option value="DRJ">Dirección de Representación Jurídica</option>

            </select>
            <br>
            <br>

        <label>Subir archivo</label>

        
        <input type="file" name="archivo">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>