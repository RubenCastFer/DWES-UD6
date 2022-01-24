<html>
    <head>
        <title>Catálogo libros</title>
    </head>
    <body>
        <h1>Libros dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>FECHA</th>
        </tr>
        <?php
            foreach ($periodicos as $periodico):
        ?>

        <tr>
            <td><?php echo $periodico['Nombre']?></td>
            <td><?php echo ($periodico['Fecha'])?></td>
        </tr>
        <?php endforeach;?>
    </table>
    </body>
</html>