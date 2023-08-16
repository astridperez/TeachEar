<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/estiloprofesor.css">
</head>
<body>
<?php session_start(); ?>	
    <div class="menu-btn">
		<i class="fas fa-bars"></i>
	</div>
	<div class="side-bar">
		<div class="close-btn">
			<i class="fas fa-times"></i>
		</div>
		<div class="menu">
			<div class="item">
				<a href="prof_cal.php"><i class="fa fa-check"></i>Calificaciones</a>
			</div>
			<div class="item">
				<a class="sub-btn"><i class="fa fa-book"></i>Cursos<i class="fas fa-angle-right dropdown"></i></a>
				
				<div class="sub-menu">
				<?php
					$profesor = $_SESSION["usuario"];
					$dbhost = "localhost";
					$dbuser = "root";
					$dbpass = "";
					$dbname = "proyecto";
					$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

					$query = mysqli_query($conn, "SELECT Materia FROM Cursos WHERE Profesor='$profesor'");

					while($row = mysqli_fetch_assoc($query)) {
						echo '<a href="#" class="sub-item" data-materia="'.$row['Materia'].'" onclick="mostrarCalificaciones(\''.$row['Materia'].'\')">'.$row['Materia'].'</a>';
					}
				?>
				</div>
			</div>
			<div class="item">
    			<a href="hacerquiz.php"><i class="fas fa-plus"></i>Nuevo Cuestionario</a>
			</div>

		</div>
	</div>
	<main>

		<h1>Bienvenido profesor <?php echo $_SESSION["usuario"]; ?></h1>
			
	</main>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/profesor.js"></script>

</body>
</html>