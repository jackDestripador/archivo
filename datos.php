<?php
    $ruta="archivos/".$_POST['unidadadministartiva']."-".$_POST['areaadministrativa']."-".$_POST['numeroexpedinete']."-".$_POST['anoexpediente'].".pdf";
    if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta)){
        echo "Archivo subido con exito";
    }else{
        echo"No se puedo subir el archivo";
    }