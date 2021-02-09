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
                <h2>Our Resources</h2>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean dignissim efficitur egestas.
                    Sed vestibulum nisi quam, non
                    ullamcorper sem tincidunt sit amet.
                    Etiam ante nibh, tristique at mattis
                    et, interdum eu lectus. Duis nec
                    risus nec velit facilisis
                    pellentesque id id lectus.
                    Vestibulum rutrum quam dictum auctor
                    maximus. Suspendisse ac semper eros.
                    Fusce dignissim ex eget purus dictum
                    lacinia. Fusce sit amet ultricies
                    nunc, et bibendum enim facilisis.
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean dignissim efficitur egestas.
                    Sed vestibulum nisi quam, non
                    ullamcorper sem tincidunt sit amet.
                    Etiam ante nibh, tristique at mattis
                    et, interdum eu lectus. Duis nec
                    risus nec velit facilisis
                    pellentesque id id lectus.
                    Vestibulum rutrum quam dictum auctor
                    maximus. Suspendisse ac semper eros.
                    Fusce dignissim ex eget purus dictum
                    lacinia. Fusce sit amet ultricies
                    nunc, et bibendum enim facilisis.</p>
            </div>
            <div>
                <h2>Info</h2>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean dignissim efficitur egestas.
                    Sed vestibulum nisi quam, non
                    ullamcorper sem tincidunt sit amet.
                    Etiam ante nibh, tristique at mattis
                    et, interdum eu lectus. Duis nec
                    risus nec velit facilisis
                    pellentesque id id lectus.
                    Vestibulum rutrum quam dictum auctor
                    maximus. Suspendisse ac semper eros.
                    Fusce dignissim ex eget purus dictum
                    lacinia. Fusce sit amet ultricies
                    nunc, et bibendum enim facilisis.
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Aenean dignissim efficitur egestas.
                    Sed vestibulum nisi quam, non
                    ullamcorper sem tincidunt sit amet.
                    Etiam ante nibh, tristique at mattis
                    et, interdum eu lectus. Duis nec
                    risus nec velit facilisis
                    pellentesque id id lectus.
                    Vestibulum rutrum quam dictum auctor
                    maximus. Suspendisse ac semper eros.
                    Fusce dignissim ex eget purus dictum
                    lacinia. Fusce sit amet ultricies
                    nunc, et bibendum enim facilisis.</p>
            </div>
            <div>
                <h2>Inicio de sesión</h2>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    echo "<p>Has iniciado sesión con ".$_SESSION['username'].".</p>";
                ?>
                
                <form action="biblio_2login.php" method="POST">
                    <input id="reg" name="logout"
                    value="Cerrar sesión" type="submit">
                    <br><br>
                </form>
                    
                <?php
                }else{
                ?>
                    
                <form action="biblio_2login.php" method="POST">
                    Usuario <input id="usu"
                    name="usuario" type="text" required>
                    <br>

                    Contraseña <input id="con"
                    name="clave" type="password">
                    <br><br>

                    <input id="ini" name="inicio"
                    value="Iniciar sesión" type="submit">
                </form>

				<form action="biblio_2login.php" method="POST">
                    <input id="reg" name="registro"
                    value="Registrarse" type="submit">
                    <br><br>
                </form>
                
                    
                <?php
                }
                ?>
            </div>
        </div>

    <!--FOOTER-->
        <div id="footer">
            <h1>Copyleft</h1>
        </div>

    </div>
</body>
</html>