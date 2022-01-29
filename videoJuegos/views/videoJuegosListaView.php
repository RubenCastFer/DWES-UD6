<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Lista elementos</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="index.php?controller=videoJuegos&action=mostraForm">Nuevo elemento</a></li>
            <li><a class="active" href="index.php?controller=videoJuegos&action=listar">Lista elementos</a></li>
            <!-- <li><a href="import.php">Importar elementos</a></li>
            <li><a href="exportar.php">Exportar elementos</a></li> -->

        </ul>
    </nav>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Director</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            
           <!-- Aquí tendrás que mostrar las filas de la tabla-->
           <?php
                
                
                foreach($juegos as $juego){
                    echo "<tr> ";
                    echo "<td>$juego[Titulo]</td>";
                    echo "<td>$juego[Director]</td>";
                    echo "<td>$juego[Precio]</td>";
                    echo "<td>$juego[Lanzamiento]</td>";
                    echo "<td><a href=index.php?controller=videoJuegos&action=juegoConcreto&varId=$juego[id]>Detalle</a></td>";
                    echo "<td><a href=index.php?controller=videoJuegos&action=mostraForm&varId=$juego[id]>Editar</a></td>";
                    echo "<td><a href=index.php?controller=videoJuegos&action=borrar&varId=$juego[id]>Borrar</a></td>";
                    echo "</tr> ";
                }   
            ?>
        </tbody>
    </table>
</body>
</html>