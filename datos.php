<?php
    //nombre del archivo
    //$ruta="archivos/".$_POST['unidadadministartiva']."-RFV-1-2024.pdf";
    //$ruta="archivos/".$_FILES['archivo']['name'];
    //$ruta="archivos/".$_POST['unidadadministartiva']."-".$_POST['numeroexpedinete']."-".$_POST['anoexpediente'].".pdf";
    $ruta="archivos/".$_POST['unidadadministartiva']."-".$_POST['areaadministrativa']."-".$_POST['numeroexpedinete']."-".$_POST['anoexpediente'].".pdf";
    //$ruta="archivos/".$_POST['anoexpediente']."-RFV-1-2024.pdf";
    if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta)){
        echo "Archivo subido con exito";
    }else{
        echo"No se puedo subir el archivo";
    }
