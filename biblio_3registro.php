<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="imgs/biblio_icono.jpg" size="16x16">
    <link href="biblio.css" rel="stylesheet" type="text/css" title="deco"/>
</head>
<body>
    <div id="todo">

    <!--HEADER-->
        <div id="header">
            <a href="biblio_1inicio.php"><h1>BIBLIOTECA VIRTUAL</h1></a>
        </div>

    <!--LISTA-->
        <div id="lista">
            <div>
                <a href="biblio_1inicio.php"><h2>Inicio</h2></a>
            </div>
            <div>
                <a href="biblio_6libros.php"><h2>Libros</h2></a>
            </div>
            <div>
                <a href="biblio_5contacto.php"><h2>Contacta</h2></a>
            </div>
        </div>

    <!--CONTENIDO-->
        <div id="contenido">
            <div>
                <h2>Crear nuevo usuario</h2>
                    
                <form action="biblio_2login.php" method="POST">
                    Nombre <input id="nom"
                    name="nombre" type="text" required>
                    <br>
                    
                    Apellidos <input id="ape"
                    name="apel" type="text" required>
                    <br>
                    
                    Fecha de nacimiento <input id="fec"
                    name="fecha" type="text" placeholder="año-mes-día" required>
                    <br>
                    
                    Correo electrónico <input id="cor"
                    name="correo" type="text" required>
                    <br>

                    Dirección <input id="dir"
                    name="direc" type="text" required>
                    <br>
                    
                    Población <input id="pob"
                    name="pobla" type="text" required>
                    <br>
                    
                    Código postal <input id="cod"
                    name="codi" type="text" required>
                    <br>
                    
                    Nombre de usuario <input id="usu"
                    name="usuario" type="text" required>
                    <br>
                    
                    Contraseña <input id="con"
                    name="clave" type="password" required>
                    <br>
                    
                    <br>

                    <input id="reg" name="nuevo"
                    value="Enviar" type="submit">
                    <br><br>
                </form>
                
            </div>
        </div>

    <!--FOOTER-->
        <div id="footer">
            <h1>Copyleft</h1>
        </div>

    </div>
</body>
</html>