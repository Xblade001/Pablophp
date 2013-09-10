<?php
require_once '../db/conexion.php';

@$nombre = addslashes($_POST['txtNombre']);
@$login = addslashes($_POST['txtLogin']);
@$passwd = addslashes($_POST['pwd2']);
$sql = "INSERT INTO usuario(usu_codigo,usu_nombre,usu_login,usu_password)
        VALUES('','$nombre','$login',md5('$passwd'))" or die("Error en la consulta" . mysqli_error($conn));
$result = mysqli_query($conn, "SELECT * FROM usuario WHERE usu_login LIKE '%$login%'") or die("Error en la consulta" . mysqli_error($conn));


if (mysqli_num_rows($result) == 0) {
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
            <h2>Los datos Se INSERTARON Correctamente</h2>
            <script LANGUAGE='JavaScript'>
                var pagina = 'ver.php'
                function redireccionar()
                {
                    location.href = pagina
                }
                setTimeout('redireccionar()', 2000);
            </script>
            <?php
        } else {
            ?>
            <h2>La LOGIN que desea Registrar ya EXISTE!!!!</h2>
            <script LANGUAGE='JavaScript'>
                var pagina = 'usuario.php'
                function redireccionar()
                {
                    location.href = pagina
                }
                setTimeout('redireccionar()', 2000);
            </script>
            <?php
        }
        ?>
    </body>
</html>