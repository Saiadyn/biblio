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
                <h2>Libros</h2>
                    
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                	Introduce el título o el autor del libro: <input name="autor_titulo" type="text">
					
                    <input name="buscar" value="Buscar" type="submit">
                    <br><br>
                </form>
                
                <div>
                	<?php
                	include 'biblio_7buscador.php';
                	?>
                </div>
                
            </div>
        </div>

    <!--FOOTER-->
        <div id="footer">
            <h1>Copyleft</h1>
        </div>

    </div>
</body>
</html>