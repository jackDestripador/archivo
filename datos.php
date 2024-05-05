<?php
    var_dump($_POST['unidadadministartiva']);


    $ua=$_POST['unidadadministartiva'];

    //nombre del archivo
    $ruta="archivos/".$_POST['unidadadministartiva']."-RFV-1-2024.pdf";

    //$ruta="archivos/".$_FILES['archivo']['name'];
    if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta)){

        echo "Archivo subido con exito";
    }else{
        echo"No se puedo subir el archivo";
    }

   echo  $_FILES['archivo']['name'];
   echo "</br>";
   echo  $_FILES['archivo']['type'];
   echo "<br>";
   echo  $_FILES['archivo']['size'];
   echo "<br>";
   echo  $_FILES['archivo']['tmp_name'];
   echo "<br>";
   echo  $_FILES['archivo']['error'];



