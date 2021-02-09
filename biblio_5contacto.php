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
                <h2>Enviar sugerencia</h2>
                    
                <form action="biblio_4mail.php" method="POST">
                	Correo eléctronico <input name="mail" type="text">
                    <br><br>
                    Mensaje <textarea style="resize:none" name="mensaje" rows="12" cols="40"></textarea>
                    <br>
					
                    <input name="sugerir"
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