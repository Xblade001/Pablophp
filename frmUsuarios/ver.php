<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reporte de Usuarios</title>
        <link rel="stylesheet" media="screen" href="../css/styles.css">
    </head>
    <body>
    <li>
        <img src="../imagen/logoBoletin.png" width="240px" height="80px" alt="Xsys Capacitacion y Tecnologia">
    </li>
    <?php
    include_once "../db/conexion.php";
    @$sql = "SELECT * FROM usuario ORDER BY usu_nombre" or die("Error en la consulta" . mysqli_error($conn));
    @$result = mysqli_query($conn, $sql);
    echo"<table class = \"tabla\">

<tr>
   <th colspan='4'>Reportes de Usuarios</th>
</tr>
<tr>
<th>Codigo</th>
<th>Nombre</th>
<th>Login</th>
<th>Actualizar</th>
</tr>";
    while ($row_usu = mysqli_fetch_array($result)) {
        echo"<tr>
   		<td>$row_usu[0]</td>
		<td>$row_usu[1]</td>
		<td>$row_usu[2]</td>
	    <td><a href=\"actualizar.php?Codigo=$row_usu[0]\">Modificar</a></td>
    	</tr>";
    }
    echo"</table>";
    ?>
</body>
</html>