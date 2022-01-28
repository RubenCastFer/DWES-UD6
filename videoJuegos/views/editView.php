<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Edita elemento</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="index.php?controller=videoJuegos&action=mostraForm">Nuevo elemento</a></li>
                <li><a class="active" href="index.php">Lista elementos</a></li>
                <!-- <li><a href="import.php">Importar elementos</a></li>
                <li><a href="exportar.php">Exportar elementos</a></li> -->

            </ul>
        </nav>
        <form class="form-register" action="index.php?controller=videoJuegos&action=modificar" enctype="multipart/form-data" method="POST">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="hidden" name="id" value="<?php echo $resultado["id"]?>"><!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
                <input type="text" name="titulo" placeholder="Titulo" class="input-100" required value="<?php echo $resultado["Titulo"]?>">
                <input type="text" name="director" placeholder="Director" class="input-100" required value="<?php echo $resultado["Director"]?>">
                <input type="text" name="desarrolladora" placeholder="Desarrolladora" class="input-100" required value="<?php echo $resultado["Desarrolladora"]?>">
                <input type="number" name="precio" placeholder="Precio" class="input-48" required value="<?php echo $resultado["Precio"]?>">
                <input type="number" name="nota" placeholder="Nota" class="input-48"required value="<?php echo $resultado["Nota"]?>">
                <input type="date" name="lanzamiento" placeholder="Lanzamiento" class="input-100" required value="<?php echo $resultado["Lanzamiento"]?>">
                <img name="avatarActual" width=200px src=<?php echo "images/".$resultado["Imagen"]?>><!-- Aquí tienes que cargar la imagen actual -->
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" value="Editar" class="btn-enviar">
                <div id="errores"><?php echo $errorEditar." ".$errorImagen ?></div>
            </div>
        </form>
    </body>
</html>