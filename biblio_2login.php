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

if(isset($_POST['registro'])){
    header("Location:".'biblio_3registro.php');
}

if(isset($_POST['nuevo'])){
    $checkexist = "SELECT nick FROM usuario WHERE nick = '".$_POST['usuario']."';";
    
    $resultado = mysqli_query($conectar,$checkexist);
    
    if(mysqli_num_rows($resultado)>=1){
        die("El usuario introducido ya existe.");
    }else{
        $inNombre = $_POST['nombre'];
        $inApel = $_POST['apel'];
        $inFecha = $_POST['fecha'];
        $inCorreo = $_POST['correo'];
        $inDirec = $_POST['direc'];
        $inPobla = $_POST['pobla'];
        $inCodi = $_POST['codi'];
        $inUsuario = $_POST['usuario'];
        $inClave = $_POST['clave'];
        
        $hash = password_hash($inClave,PASSWORD_DEFAULT);
        
        $regis = "INSERT INTO usuario (nombre,apellidos,fecha_nacimiento,
        email,direccion,población,codigo_postal,nick,contrasenya)
        VALUES ('$inNombre','$inApel','$inFecha','$inCorreo','$inDirec','$inPobla',
        '$inCodi','$inUsuario','$hash');";
        
        mysqli_query($conectar,$regis);
        
        header("Location:".'biblio_1inicio.php');
    }
}

if(isset($_POST['inicio'])){

    $user = $_POST['usuario'];
    $pass = $_POST['clave'];

    $check = mysqli_query($conectar,"SELECT * FROM usuario WHERE nick = '$user';");
    $fila = mysqli_fetch_array($check,MYSQLI_ASSOC);
    $hash = $fila['contrasenya'];
    
    $resultado = mysqli_query($conectar,$check);
    
    if(!password_verify($pass,$hash)){
        die("Usuario o contraseña incorrectos.");
    }else{
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['usuario'];
        header("Location:".'biblio_1inicio.php');
    }
}

if(isset($_POST['logout'])){
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    session_destroy();
    header("Location:".'biblio_1inicio.php');
}
?>