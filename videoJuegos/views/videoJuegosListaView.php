<html>
    <head>
        <title>Catálogo juegos</title>
    </head>
    <body>
        <h1>VideoJuegos</h1>
        <table border="1">
        <tr>
            <th>TITULO</th>
            <th>DIRECTOR</th>
            <th>PRECIO</th>
            <th>LANZAMIENTO</th>

        </tr>
        <?php
            foreach($juegos as $juego){
                echo "<tr> ";
                echo "<td>$juego[Titulo]</td>";
                echo "<td>$juego[Director]</td>";
                echo "<td>$juego[Precio]</td>";
                echo "<td>$juego[Lanzamiento]</td>";
                echo "<td><a href=index.php?controller=videoJuegos&action=juegoConcreto&varId=$juego[id]>Detalle</a></td>";
                echo "<td><a href=edit.php?varId=$juego[id]>Editar</a></td>";
                echo "<td><a href=delete.php?varId=$juego[id]>Borrar</a></td>";
                echo "</tr> ";
            }            
            ?>
    </table>
    </body>
</html>