<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "biblioteca";

$conectar = mysqli_connect($servername,$username,$password,$databasename);
if (!$conectar) {
    die("Fallo al conectarse a la base de datos: ".mysqli_connect_error());
}

if(isset($_POST['buscar'])){
    $autor_titulo = $_POST['autor_titulo'];
    
    $buscarLibro = "SELECT titulo,autor,editorial,genero,fecha_publicacion,id_libro FROM libro WHERE titulo LIKE '%$autor_titulo%';";
    $resultadoLibro = mysqli_query($conectar,$buscarLibro);
    
    $buscarAutor = "SELECT titulo,autor,editorial,genero,fecha_publicacion,id_libro FROM libro WHERE autor LIKE '%$autor_titulo%';";
    $resultadoAutor = mysqli_query($conectar,$buscarAutor);
    
    while($filaLibro = $resultadoLibro->fetch_array()){
        echo "<p>
        <strong>TÍTULO</strong>: $filaLibro[0]<br>".
        "<strong>PORTADA</strong>:<br> <img height='200px' src='imgs/libro$filaLibro[5].jpg'><br>".
        "<strong>AUTOR</strong>: $filaLibro[1]<br>".
        "<strong>EDITORIAL</strong>: $filaLibro[2]<br>".
        "<strong>GÉNERO</strong>: $filaLibro[3]<br>".
        "<strong>FECHA DE PUBLICACIÓN</strong>: $filaLibro[4]
        </p>";
    }
    while($filaAutor = $resultadoAutor->fetch_array()){
        echo "<p>
        <strong>TÍTULO</strong>: $filaAutor[0]<br>".
        "<strong>PORTADA</strong>:<br> <img height='200px' src='imgs/libro$filaAutor[5].jpg'><br>".
        "<strong>AUTOR</strong>: $filaAutor[1]<br>".
        "<strong>EDITORIAL</strong>: $filaAutor[2]<br>".
        "<strong>GÉNERO</strong>: $filaAutor[3]<br>".
        "<strong>FECHA DE PUBLICACIÓN</strong>: $filaAutor[4]<br><br>".
        "</p>";
    }
}
?>