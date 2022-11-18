<?php
include 'cnx.php';
$cmbCurso=(isset($_POST['cmbCurso']))?$_POST['cmbCurso']:"";
$txtNom=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtDes=(isset($_POST['txtDes']))?$_POST['txtDes']:"";
$txtIg=(isset($_POST['txtIg']))?$_POST['txtIg']:"";
$img='';
if (isset($_FILES["txtImg"])){ 
    $file= $_FILES ["txtImg"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file ["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "imagenes/";
    if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
        echo "error, no es una imagen";
    }

    else if ($size > 10*1024*1024)
    {
        echo "error, es re grande";
    }
    else{
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);
        $img="imagenes/".$nombre;
    }
    
}
    
    $query=mysqli_query($mysqli,"INSERT INTO tarjetas(curso, nombre, descripcion, ig, img ) VALUES ('$cmbCurso','$txtNom' , '$txtDes', '$txtIg', '$img')");
    header( 'location: foto.php')

?>