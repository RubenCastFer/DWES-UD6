<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/view.css">
    <title>Document</title>
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
    <div class="container">
            <header>
                <div class="bio">
                    <h1><?php echo $borrado?></h1>
                    <img src=<?php echo "images/".$resultadoVista["Imagen"]?> alt="background" class="bg"><!--aquí va el link a la imagen-->
                    <div>
                        <h3><?php echo $resultadoVista["Titulo"]?></h3><!--aquí va el valor del texto 1-->
                        <p><?php echo $resultadoVista["Director"]?></p><!-- aquí va el valor del texto 2--> 
                        <p><?php echo $resultadoVista["Desarrolladora"]?></p><!-- aquí va el valor del texto 3-->
                    </div>
                </div>
            </header>

            <div class="content">
                <div class="data">
                    <ul>
                        <li>
                        <?php echo $resultadoVista["Precio"]?> <!-- aquí va el valor del número 1-->
                            <span>Precio</span><!-- pon aquí el nombre de tu número 1-->
                        </li>
                        <li>
                        <?php echo $resultadoVista["Nota"]?> <!-- aquí va el valor del número 2-->
                            <span>Nota</span><!-- pon aquí el nombre de tu número 2-->
                        </li>
                        <li>
                        <?php echo $resultadoVista["Lanzamiento"]?> <!-- aquí va el valor de la fecha-->
                            <span>Lanzamiento</span><!-- pon aquí el nombre de tu fecha-->
                        </li>
                    </ul>
                </div>
            </div>

        </div>
</body>
</html>