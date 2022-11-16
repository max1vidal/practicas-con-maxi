<?php
require 'cnx.php';
$nombre=$_POST['nombre'];
$curso=$_POST['curso'];
$descripcion=$_POST['descripcion'];
$ig=$_POST['instagram'];
$img='';
if (isset($_FILES["img"])){
    $file = $_FILES["img"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagenzise($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "imagenes/";
    if ($tipo !='image.jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo !='image/gif' 
    )

    {
        echo "error, el archivo no es una imagen";
    }
    else if ($size > 10*1024*1024){
        echo " error, el tamaño maximo permitido es de 10MB"
    }
    else{
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional,$src);
        $img="imagenes/".$nombre;
    }



}
    $query=mysqli_query($cnx,"INSERT INTO info_mañana(nombre, curso, descripcion, ig, img) VALUES ('$nombre', '$curso', '$descripcion', '$ig', '$img')");
    header( 'location: index.php')

?>