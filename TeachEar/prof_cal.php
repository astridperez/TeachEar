<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link rel="stylesheet" type="text/css" href="css/estilopcal.css">

</head>
<body>
<?php session_start(); ?>	
<?php
$profesor = $_SESSION["usuario"];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$materias_query = mysqli_query($conn, "SELECT Materia FROM Cursos WHERE Profesor='$profesor'");
$materias = array();
while($row = mysqli_fetch_assoc($materias_query)) {
    $materias[] = $row["Materia"];
}

foreach($materias as $materia) {
    $query = mysqli_query($conn, "SELECT * FROM Calificaciones WHERE Curso='$materia'");
    echo "<h1>$materia</h1>";
    echo "<div id='centrar'><table>";
    echo "<thead><tr><th>ID de alumno</th><th>Nombre</th><th>Calificación</th></tr></thead>";
    echo "<tbody>";
    while($row = mysqli_fetch_assoc($query)) {
        $id = $row['ID'];
        $calificacion = $row['Calificación'];
        $nombre_query = mysqli_query($conn, "SELECT Nombre FROM Usuarios WHERE ID='$id'");
        $nombre_row = mysqli_fetch_assoc($nombre_query);
        $nombre = $nombre_row['Nombre'];
        echo "<tr><td>".$id."</td><td>".$nombre."</td><td>".$calificacion."</td></tr>";
    }
    echo "</tbody>";
    echo "</table></div>";
}
?>


</div>


</body>
</html>