<?php

    $nombre = $_FILES['archivo']['name'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $registro = $_POST['registro'];
    
    if(file_exists('../archivos/'.$registro)){
        if(move_uploaded_file($ruta, '../archivos/'.$registro."/".$nombre)){
            echo 'Subido con éxito';
        }else{
            echo 'No se ha podido subir';
        }
    }else{
        mkdir('../archivos/'.$registro, 0777, true);
        if(move_uploaded_file($ruta, '../archivos/'.$registro."/".$nombre)){
            echo 'Subido con éxito';
        }else{
            echo 'No se ha podido subir';
        }
    }
    
?>