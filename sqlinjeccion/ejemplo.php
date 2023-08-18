<?php
$codigo_producto=null;
$nombre_producto=null;

    $con=mysqli_connect("localhost","root", "", "facturacionaudi");
    
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM products WHERE id_producto=$id";
    
    $re=$con->query($sql);
    $fila = $re->fetch_array();
    $nombre_producto=$fila["nombre_producto"];
    $codigo_producto=$fila["codigo_producto"];
    

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1" cellpadding="10">
            <tr>
            <td><?php echo $nombre_producto?></td>
            <td><?php echo $codigo_producto?></td>
            
            </tr>
        </table>
    </body>
</html>