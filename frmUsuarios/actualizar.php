<?
include ("../db/conexion.php");
$Codigo = $_GET["Codigo"];
$sql = "SELECT * FROM usuario WHERE usu_codigo=$Codigo" or die("Error en la consulta" . mysqli_error($conn));
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
?>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alta de Usuarios</title>
        <link rel="stylesheet" media="screen" href="../css/styles.css" >
    </head>
    <body>
        <form class="contact_form" action="update.php" method="post">
            <ul>
                <li>
                    <img src="../imagen/logoBoletin.png" width="240px" height="80px" alt="Xsys Capacitacion y Tecnologia">
                </li>
                <li>
                    <h2>Alta de Usuarios</h2>
                </li>
                <li>
                    <label for="name">Codigo:</label>
                    <input name="txtCodigo" type="text" value="<?php echo $row[0]; ?>" required id="nombre" placeholder="123" readonly required/> 
                </li>
                <li>
                    <label for="name">Nombre:</label>
                    <input name="txtNombre" type="text" value="<?php echo $row[1]; ?>" required id="nombre" placeholder="Alberto Gimenez" required/> 

                </li>
                <li>
                    <label for="name">Login:</label>
                    <input name="txtLogin" type="text" value="<?php echo $row[2]; ?>" required id="login" placeholder="agimenez" readonly required />
                </li>
                <li>
                    <label for="name">Contraña:</label>
                    <input type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}" name="pwd1" id ="passwd" onchange="form.pwd2.pattern = this.value;">
                    <script>document.getElementById('passwd').focus();</script>
                </li>
                <li>
                    <label for="name">Confirmar Contraña:</label>
                    <input type="password" name="pwd2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}">
                </li>
                <li>
                    <button class="submit" type="submit">Guardar</button>
                </li>
            </ul>
        </form>
    </body>
</html>
