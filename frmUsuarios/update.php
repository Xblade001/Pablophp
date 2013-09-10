<?php
include ("../db/conexion.php");
@$codigo = addslashes($_POST["txtCodigo"]);
@$nombre = addslashes($_POST['txtNombre']);
@$login = addslashes($_POST['txtLogin']);
@$passwd = addslashes($_POST['pwd2']);

$sql = "UPDATE usuario SET usu_nombre = '$nombre',usu_login='$login', usu_password=md5('$passwd') WHERE usu_codigo = '$codigo'" or die("Error en la consulta" . mysqli_error($conn));
mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" media="screen" href="../css/styles.css" >
        <title>Alta de Usuarios</title>
    </head>
    <body>
        <h2>Los registros han sido actualizados</h2>
        <script LANGUAGE='JavaScript'>
            var pagina='ver.php'
            function redireccionar()
            {  
                location.href=pagina
            }
            setTimeout ('redireccionar()', 2000);
        </script>
    <body>
    </body>
</html>
