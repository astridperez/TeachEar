<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cuestionario</title>
    <link rel="stylesheet" type="text/css" href="css/estilohacerquiz.css">
</head>
<body>
    <h1>Crear nuevo quiz</h1>
    <div id="login-box"> 
        <form method="post" name="" id="login-form" > 
            <div class="user-box">                         
                <label for="txtnQuiz">Nombre del quiz</label>
                <input type="text" id="txtnQuiz" name="txtnQuiz"/> 
            </div> 
            <div class="user-box">                          
                <label for="txtpregunta">Pregunta</label>
                <input type="text" id="txtpregunta" name="txtpregunta"/>
            </div>
            <div class="user-box">                          
                <label for="txtrespuesta">Respuesta</label>
                <input type="text" id="txtrespuesta" name="txtrespuesta"/>
            </div>  
        <div class="user-box">                         
                <button id="btnEnviar" type="submit"">Insertar pregunta</button>
        </div> 
    </form>
        
    </div>
    
    <?php
        session_start();

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "proyecto";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$conn) {
            die("No hay conexión: " . mysqli_connect_error());
        }

        if(isset($_POST["txtnQuiz"]) && isset($_POST["txtpregunta"]) && isset($_POST["txtrespuesta"])) {
            $m = $_POST["txtnQuiz"];
            $p = $_POST["txtpregunta"];
            $r = $_POST["txtrespuesta"];

            $query = mysqli_query($conn, "INSERT INTO QUIZZES (Materia, Pregunta, Respuesta) VALUES ('" . $m . "', '" . $p . "', '" . $r . "')");

            if ($query) {
                echo "<footer>Pregunta insertada</footer>";
            } else {
                echo "<footer>Error en el registro</footer>";
            }
        }
    ?>
    
</body>
</html>