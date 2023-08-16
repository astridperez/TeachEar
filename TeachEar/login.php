<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Inicio</title>
    <script type="text/javascript" src="js/inicio.js"></script>
</head>
<body>
    <?php session_start();?>
    <h1 id="HIn">Login</h1>
    <div id="login-box"> 
        <form action="login.php" method="post" name="" id="login-form" > 
            <div class="user-box">                         
                <label for="txtUsuario">ID</label>
                <input type="text" id="usuario" name="txtUsuario"/> 
            </div> 
            <div class="user-box">                          
                <label for="txtContraseña">Password</label>
                <input type="password" id="contraseña" name="txtContraseña"/>
            </div> 
            <div class="user-box">                         
                <button id="btnEnviar" type="submit">Ingresar</button>       
                <button id="btnCreateAccount" type="button" onclick="showRegisterForm()">Crear cuenta</button>
            </div> 
        </form>
    </div>

    <div id="formulario"> 
    <h1 id="HRe">Registro</h1>
        <form action="login.php" method="post" name="" id="frmRegistro">                            
            <label for="txtID">ID</label>
            <input type="text" id="txtID" name="txtID"/> 
            <p>
            <p>
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre"/>
            </p>            
            <label for="txtPoA">Alumno o Profesor</label>
            <input type="text" id="txtPoA" name="txtPoA"/>
            <p>
            <label for="contraseñaReg">Password</label>
            <input type="password" id="contraseñaReg" name="contraseñaReg"/>
            </p>
            <button id="btnRegistrar" type="submit">Registrarse</button>       
            <button id="btnAlreadyHaveAccount" type="button" onclick="showLoginForm()">Ya tengo cuenta</button>

        </form>
    </div>

    <?php

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "proyecto";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$conn) {
            die("No hay conexión: " . mysqli_connect_error());
        }

        if(isset($_POST["txtUsuario"]) && isset($_POST["txtContraseña"])) {
            $id = $_POST["txtUsuario"];
            $pass = $_POST["txtContraseña"];
        
            $query = mysqli_query($conn, "SELECT * FROM USUARIOS WHERE ID = '" . $id . "' AND Password = '" . $pass . "'");
            $nr = mysqli_num_rows($query);
    
            if ($nr == 1) {
                $row = mysqli_fetch_assoc($query);
                if ($row["Type_of_user"] == "Alumno") {
                    $_SESSION["usuario"] = $id; //Establecer la variable de sesión
                    header("Location: Alumno.php");
                } else if ($row["Type_of_user"] == "Profesor") {
                    $_SESSION["usuario"] = $row["Nombre"];
                    header("Location: Profesor.php");
                } else {
                    echo "<footer>Tipo de usuario no válido</footer>";
                }
            } else {
                echo "<footer>Contraseña o ID incorrectos</footer>";
            }
        }

        if(isset($_POST["txtID"]) && isset($_POST["txtPoA"]) && isset($_POST["contraseñaReg"])) {
            $id = $_POST["txtID"];
            $poa = $_POST["txtPoA"];
            $pass = $_POST["contraseñaReg"];

            $query = mysqli_query($conn, "INSERT INTO USUARIOS (ID, Type_of_user, Password) VALUES ('" . $id . "', '" . $poa . "', '" . $pass . "')");

            if ($query) {
                echo "<footer>Registro exitoso</footer>";
            } else {
                echo "<footer>Error en el registro</footer>";
            }
        }
    ?>

</body>
</html>