<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alta de Usuarios</title>
        <link rel="stylesheet" media="screen" href="../css/styles.css" >
        <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    </head>
    <body>
        <form class="contact_form" action="grabar.php" method="post">
            <ul>
                <li>
                    <img src="../imagen/logoBoletin.png" width="240px" height="80px" alt="Xsys Capacitacion y Tecnologia">
                </li>
                <li>
                    <h2>Alta de Usuarios</h2>
                </li>
                <li>
                    <label for="name">Nombre:</label>
                    <input name="txtNombre" type="text" required id="nombre"  placeholder="Alberto Gimenez" required/>
                    <script>document.getElementById('nombre').focus();</script>
                </li>
                <li>
                    <label for="name">Login:</label>
                    <input name="txtLogin" type="text" required id="login"  placeholder="agimenez" required />
                </li>
                <li>
                    <label for="name">Contraseña:</label>
                    <input type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}" name="pwd1" onchange="form.pwd2.pattern = this.value;">
                </li>
                <li>
                    <label for="name">Confirmar Contraseña:</label>
                    <input type="password" name="pwd2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}">
                </li>
                <li>
                    <button class="submit" type="submit">Guardar</button>
                </li>
            </ul>
        </form>
    </body>
</html>