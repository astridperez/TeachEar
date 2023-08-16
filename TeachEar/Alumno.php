<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloalumno.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php session_start(); ?>	
    <nav class="stroke">
        <ul>
            <li>
                <a href="#" onclick="Inicio()">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li>
                <a href="#" onclick="Calificaciones()">
                    <i class="fa fa-table"></i>
                </a>
            </li>
            <li>
                <a href="#" onclick="Estadisticas()">
                    <i class="fa fa-book"></i>
                </a>
            </li>
            <li>
                <a href="#"onclick="Cursos()">
                  <i class="fa fa-graduation-cap"></i>
                </a>
            </li>
        </ul>
    </nav>

    <div id = "inicio">
        <h1>Inicio</h1>

        <a href="#" onclick="Juego()">
            <i id="icon" class="fa fa-gamepad"></i>
        </a>
        
        <form id = "juego">
            <input id="on-3-1" name="r-1" type="radio" value="1-1" />
            <input id="on-3-2" name="r-1" type="radio" value="1-2" />
            <input id="on-3-3" name="r-1" type="radio" value="1-3" />
            <input id="on-3-4" name="r-1" type="radio" value="1-4" />
            <input id="on-3-5" name="r-1" type="radio" value="1-5" /><input id="tw-3-1" name="r-2" type="radio" value="2-1" /><input id="tw-3-2" name="r-2" type="radio" value="2-2" /><input id="tw-3-3" name="r-2" type="radio" value="2-3" /><input id="tw-3-4" name="r-2" type="radio" value="2-4" /><input id="tw-3-5" name="r-2" type="radio" value="2-5" /><input id="thr-1-1" name="r-3" type="radio" value="3-1-1" /><input id="thr-1-2" name="r-3" type="radio" value="3-1-2" /><input id="thr-1-3" name="r-3" type="radio" value="3-1-3" /><input id="thr-1-4" name="r-3" type="radio" value="3-1-4" /><input id="thr-1-5" name="r-3" type="radio" value="3-1-5" /><input id="thr-1-6" name="r-3" type="radio" value="3-1-6" /><input id="thr-1-7" name="r-3" type="radio" value="3-1-7" /><input id="thr-2-1" name="r-3" type="radio" value="3-2-1" /><input id="thr-2-2" name="r-3" type="radio" value="3-2-2" /><input id="thr-2-3" name="r-3" type="radio" value="3-2-3" /><input id="thr-2-4" name="r-3" type="radio" value="3-2-4" /><input id="thr-2-5" name="r-3" type="radio" value="3-2-5" /><input id="thr-2-6" name="r-3" type="radio" value="3-2-6" /><input id="thr-3-1" name="r-3" type="radio" value="3-3-1" /><input id="thr-3-2" name="r-3" type="radio" value="3-3-2" /><input id="thr-3-3" name="r-3" type="radio" value="3-3-3" /><input id="thr-3-4" name="r-3" type="radio" value="3-3-4" /><input id="thr-3-5" name="r-3" type="radio" value="3-3-5" /><input id="thr-1-1" name="r-3" type="radio" value="3-1-1" /><input id="thr-1-2" name="r-3" type="radio" value="3-1-2" /><input id="thr-1-3" name="r-3" type="radio" value="3-1-3" /><input id="thr-1-4" name="r-3" type="radio" value="3-1-4" /><input id="thr-1-5" name="r-3" type="radio" value="3-1-5" /><input id="thr-1-6" name="r-3" type="radio" value="3-1-6" /><input id="thr-1-7" name="r-3" type="radio" value="3-1-7" /><input id="thr-2-1" name="r-3" type="radio" value="3-2-1" /><input id="thr-2-2" name="r-3" type="radio" value="3-2-2" /><input id="thr-2-3" name="r-3" type="radio" value="3-2-3" /><input id="thr-2-4" name="r-3" type="radio" value="3-2-4" /><input id="thr-2-5" name="r-3" type="radio" value="3-2-5" /><input id="thr-2-6" name="r-3" type="radio" value="3-2-6" /><input id="fr-1-1" name="r-4" type="radio" value="4-1-1" /><input id="fr-1-2" name="r-4" type="radio" value="4-1-2" /><input id="fr-1-3" name="r-4" type="radio" value="4-1-3" /><input id="fr-1-4" name="r-4" type="radio" value="4-1-4" /><input id="fr-1-5" name="r-4" type="radio" value="4-1-5" /><input id="fr-1-6" name="r-4" type="radio" value="4-1-6" /><input id="fr-1-7" name="r-4" type="radio" value="4-1-7" /><input id="fr-2-1" name="r-4" type="radio" value="4-2-1" /><input id="fr-2-2" name="r-4" type="radio" value="4-2-2" /><input id="fr-2-3" name="r-4" type="radio" value="4-2-3" /><input id="fr-2-4" name="r-4" type="radio" value="4-2-4" /><input id="fr-2-5" name="r-4" type="radio" value="4-2-5" /><input id="fr-2-6" name="r-4" type="radio" value="4-2-6" /><input id="fv-1-1" name="r-5" type="radio" value="5-1-1" /><input id="fv-1-2" name="r-5" type="radio" value="5-1-2" /><input id="fv-1-3" name="r-5" type="radio" value="5-1-3" /><input id="fv-1-4" name="r-5" type="radio" value="5-1-4" /><input id="fv-1-5" name="r-5" type="radio" value="5-1-5" /><input id="fv-1-6" name="r-5" type="radio" value="5-1-6" /><input id="fv-1-7" name="r-5" type="radio" value="5-1-7" /><input id="fv-2-1" name="r-5" type="radio" value="5-2-1" /><input id="fv-2-2" name="r-5" type="radio" value="5-2-2" /><input id="fv-2-3" name="r-5" type="radio" value="5-2-3" /><input id="fv-2-4" name="r-5" type="radio" value="5-2-4" /><input id="fv-2-5" name="r-5" type="radio" value="5-2-5" /><input id="fv-2-6" name="r-5" type="radio" value="5-2-6" /><input id="sx-1-1" name="r-6" type="radio" value="6-1-1" /><input id="sx-1-2" name="r-6" type="radio" value="6-1-2" /><input id="sx-1-3" name="r-6" type="radio" value="6-1-3" /><input id="sx-1-4" name="r-6" type="radio" value="6-1-4" /><input id="sx-1-5" name="r-6" type="radio" value="6-1-5" /><input id="sx-1-6" name="r-6" type="radio" value="6-1-6" /><input id="sx-1-7" name="r-6" type="radio" value="6-1-7" /><input id="svn-1-1" name="r-7" type="radio" value="7-1-1" /><input id="svn-1-2" name="r-7" type="radio" value="7-1-2" /><input id="svn-1-3" name="r-7" type="radio" value="7-1-3" /><input id="svn-1-4" name="r-7" type="radio" value="7-1-4" /><input id="svn-1-5" name="r-7" type="radio" value="7-1-5" /><input id="svn-1-6" name="r-7" type="radio" value="7-1-6" /><input id="svn-1-7" name="r-7" type="radio" value="7-1-7" /><input id="ght-1-1" name="r-8" type="radio" value="8-1-1" /><input id="ght-1-2" name="r-8" type="radio" value="8-1-2" /><input id="ght-1-3" name="r-8" type="radio" value="8-1-3" /><input id="ght-1-4" name="r-8" type="radio" value="8-1-4" /><input id="ght-1-5" name="r-8" type="radio" value="8-1-5" /><input id="ght-1-6" name="r-8" type="radio" value="8-1-6" /><input id="ght-1-7" name="r-8" type="radio" value="8-1-7" /><input id="nn-1-1" name="r-9" type="radio" value="9-1-1" /><input id="nn-1-2" name="r-9" type="radio" value="9-1-2" /><input id="nn-1-3" name="r-9" type="radio" value="9-1-3" /><input id="nn-1-4" name="r-9" type="radio" value="9-1-4" /><input id="nn-1-5" name="r-9" type="radio" value="9-1-5" /><input id="nn-1-6" name="r-9" type="radio" value="9-1-6" /><input id="nn-1-7" name="r-9" type="radio" value="9-1-7" /><input id="tn-1-1" name="r-10" type="radio" value="10-1-1" /><input id="tn-1-2" name="r-10" type="radio" value="10-1-2" /><input id="tn-1-3" name="r-10" type="radio" value="10-1-3" /><input id="tn-1-4" name="r-10" type="radio" value="10-1-4" /><input id="tn-1-5" name="r-10" type="radio" value="10-1-5" /><input id="tn-1-6" name="r-10" type="radio" value="10-1-6" /><input id="tn-1-7" name="r-10" type="radio" value="10-1-7" />
            <div class="controls">
                <div class="control">
                <div class="rs">
                    <div class="r r-1-1">
                    <label for="on-1-1"></label>
                    <label for="on-1-2"></label>
                    <label for="on-1-3"></label>
                    <label for="on-1-4"></label>
                    <label for="on-1-5"></label>
                    <label for="on-1-6"></label>
                    <label for="on-1-7"></label>
                    </div>
                    <div class="r r-1-2">
                    <label for="on-2-1"></label>
                    <label for="on-2-2"></label>
                    <label for="on-2-3"></label>
                    <label for="on-2-4"></label>
                    <label for="on-2-5"></label>
                    <label for="on-2-6"></label>
                    </div>
                    <div class="r r-1-3">
                    <label for="on-3-1"></label>
                    <label for="on-3-2"></label>
                    <label for="on-3-3"></label>
                    <label for="on-3-4"></label>
                    <label for="on-3-5"></label>
                    </div>
                    <div class="r r-2-1">
                    <label for="tw-1-1"></label>
                    <label for="tw-1-2"></label>
                    <label for="tw-1-3"></label>
                    <label for="tw-1-4"></label>
                    <label for="tw-1-5"></label>
                    <label for="tw-1-6"></label>
                    <label for="tw-1-7"></label>
                    </div>
                    <div class="r r-2-2">
                    <label for="tw-2-1"></label>
                    <label for="tw-2-2"></label>
                    <label for="tw-2-3"></label>
                    <label for="tw-2-4"></label>
                    <label for="tw-2-5"></label>
                    <label for="tw-2-6"></label>
                    </div>
                    <div class="r r-2-3">
                    <label for="tw-3-1"></label>
                    <label for="tw-3-2"></label>
                    <label for="tw-3-3"></label>
                    <label for="tw-3-4"></label>
                    <label for="tw-3-5"></label>
                    </div>
                    <div class="r r-3-1">
                    <label for="thr-1-1"></label>
                    <label for="thr-1-2"></label>
                    <label for="thr-1-3"></label>
                    <label for="thr-1-4"></label>
                    <label for="thr-1-5"></label>
                    <label for="thr-1-6"></label>
                    <label for="thr-1-7"></label>
                    </div>
                    <div class="r r-3-2">
                    <label for="thr-2-1"></label>
                    <label for="thr-2-2"></label>
                    <label for="thr-2-3"></label>
                    <label for="thr-2-4"></label>
                    <label for="thr-2-5"></label>
                    <label for="thr-2-6"></label>
                    </div>
                    <div class="r r-3-3">
                    <label for="thr-3-1"></label>
                    <label for="thr-3-2"></label>
                    <label for="thr-3-3"></label>
                    <label for="thr-3-4"></label>
                    <label for="thr-3-5"></label>
                    </div>
                    <div class="r r-4-1">
                    <label for="fr-1-1"></label>
                    <label for="fr-1-2"></label>
                    <label for="fr-1-3"></label>
                    <label for="fr-1-4"></label>
                    <label for="fr-1-5"></label>
                    <label for="fr-1-6"></label>
                    <label for="fr-1-7"></label>
                    </div>
                    <div class="r r-4-2">
                    <label for="fr-2-1"></label>
                    <label for="fr-2-2"></label>
                    <label for="fr-2-3"></label>
                    <label for="fr-2-4"></label>
                    <label for="fr-2-5"></label>
                    <label for="fr-2-6"></label>
                    </div>
                    <div class="r r-5-1">
                    <label for="fv-1-1"></label>
                    <label for="fv-1-2"></label>
                    <label for="fv-1-3"></label>
                    <label for="fv-1-4"></label>
                    <label for="fv-1-5"></label>
                    <label for="fv-1-6"></label>
                    <label for="fv-1-7"></label>
                    </div>
                    <div class="r r-5-2">
                    <label for="fv-2-1"></label>
                    <label for="fv-2-2"></label>
                    <label for="fv-2-3"></label>
                    <label for="fv-2-4"></label>
                    <label for="fv-2-5"></label>
                    <label for="fv-2-6"></label>
                    </div>
                    <div class="r r-6-1">
                    <label for="sx-1-1"></label>
                    <label for="sx-1-2"></label>
                    <label for="sx-1-3"></label>
                    <label for="sx-1-4"></label>
                    <label for="sx-1-5"></label>
                    <label for="sx-1-6"></label>
                    <label for="sx-1-7"></label>
                    </div>
                    <div class="r r-6-2">
                    <label for="sx-2-1"></label>
                    <label for="sx-2-2"></label>
                    <label for="sx-2-3"></label>
                    <label for="sx-2-4"></label>
                    <label for="sx-2-5"></label>
                    <label for="sx-2-6"></label>
                    </div>
                    <div class="r r-7-1">
                    <label for="svn-1-1"></label>
                    <label for="svn-1-2"></label>
                    <label for="svn-1-3"></label>
                    <label for="svn-1-4"></label>
                    <label for="svn-1-5"></label>
                    <label for="svn-1-6"></label>
                    <label for="svn-1-7"></label>
                    </div>
                    <div class="r r-8-1">
                    <label for="ght-1-1"></label>
                    <label for="ght-1-2"></label>
                    <label for="ght-1-3"></label>
                    <label for="ght-1-4"></label>
                    <label for="ght-1-5"></label>
                    <label for="ght-1-6"></label>
                    <label for="ght-1-7"></label>
                    </div>
                    <div class="r r-9-1">
                    <label for="nn-1-1"></label>
                    <label for="nn-1-2"></label>
                    <label for="nn-1-3"></label>
                    <label for="nn-1-4"></label>
                    <label for="nn-1-5"></label>
                    <label for="nn-1-6"></label>
                    <label for="nn-1-7"></label>
                    </div>
                    <div class="r r-10-1">
                    <label for="tn-1-1"></label>
                    <label for="tn-1-2"></label>
                    <label for="tn-1-3"></label>
                    <label for="tn-1-4"></label>
                    <label for="tn-1-5"></label>
                    <label for="tn-1-6"></label>
                    <label for="tn-1-7"></label>
                    </div>
                </div>
                </div>
            </div>
            <div class="bs">
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="div r">
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                <div class="b"></div>
                </div>
                <div class="line"></div>
            </div>
            <div class="results">
                <div class="go">
                <span>Game<br /> Over</span>
                <div class="minor"></div>
                <button type="reset">Again</button>
                </div>
                <div class="win">
                <span>You<br /> Win</span>
                <div class="major"></div>
                <button type="reset">Again</button>
                </div>
            </div>
            </form>
        </div>

    
    <div id = "Cursos">
        <h1>Cursos</h1>

            <div class = "botones">
                <?php
                    $dbhost = "localhost";
                    $dbuser = "root";
                    $dbpass = "";
                    $dbname = "proyecto";

                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                    // Realizamos la consulta a la tabla CURSOS
                    $query = mysqli_query($conn, "SELECT * FROM CURSOS");

                    while($row = mysqli_fetch_assoc($query)) {
                        
                        echo ' <button class="btnCursos" data-materia="' . $row["Materia"] . '">' . $row["Materia"] . ' <p>' . $row["Profesor"] . '</p></button>';
                    }
                ?>
            </div>    

            <script>
                // Agregamos un event listener a los botones
                var buttons = document.querySelectorAll(".btnCursos");
                buttons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        // Obtenemos la materia de este botón
                        var materia = button.getAttribute('data-materia');

                        // Construimos la URL para el quiz.html con la materia
                        var url = 'quiz.php?materia=' + encodeURIComponent(materia);

                        // Abrimos el quiz.html en una nueva ventana
                        window.open(url);
                    });
                });
            </script>
    </div>
    
    <div id="estadisticas">
        <h2>Estadísticas de cursos</h2>
        
        <?php
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "proyecto";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            // Realizamos la consulta a la tabla CURSOS para contar las materias por profesor
            $query = mysqli_query($conn, "SELECT Curso, COUNT(*) as Intentos FROM Calificaciones GROUP BY Curso");

            // Creamos dos arrays para almacenar los nombres de los profesores y la cantidad de materias que tienen
            $profesores = array();
            $materias = array();

            while($row = mysqli_fetch_assoc($query)) {
                $profesor = $row["Curso"];
                $total = $row["Intentos"];
                
                array_push($profesores, $profesor);
                array_push($materias, $total);
            }          
            
            mysqli_close($conn);
        ?>

        <div id="grafica">
            <canvas id="myChart" width="600" height="400"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($profesores); ?>,
                        datasets: [{
                            label: 'Cantidad de intentos por quiz',
                            data: <?php echo json_encode($materias); ?>,
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 205, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(201, 203, 207, 0.6)'
                            ],

                            borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                            ],

                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                ticks: { color: '#4D4D4D'}
                            },
                            x: {
                                ticks: { color: '#4D4D4D',
                                        font: {
                                            size: 15
                                        } }
                            },
                        }, 
                        plugins: {
                            tooltip: {
                                enabled: false // <-- this option disables tooltips
                            }, 
                            legend: {
                                labels: {
                                    font: {
                                        size: 25
                                    }, 
                                }
                            }
                        }
                    }
                });
            </script>
        </div>
        
        <?php
            $gid = $_SESSION["usuario"];
                
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "proyecto";

            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                // Realizamos una nueva consulta a la tabla CURSOS para contar los promedios por curso
            $query2 = mysqli_query($conn, "SELECT Curso, AVG(Calificación) as Promedio FROM Calificaciones WHERE ID=$gid GROUP BY Curso");

            // Creamos dos nuevos arrays para almacenar los nombres de los cursos y sus promedios
            $cursos = array();
            $promedios = array();

            while($row = mysqli_fetch_assoc($query2)) {
                $curso = $row["Curso"];
                $promedio = $row["Promedio"];
                            
                array_push($cursos, $curso);
                array_push($promedios, $promedio);
            }
            mysqli_close($conn);
        ?>
       
        <div id="grafica">
            <canvas id="myChart2" width="600" height="400"></canvas>
            <script>
                var ctx = document.getElementById('myChart2').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($cursos); ?>,
                        datasets: [{
                            label: 'Promedio de calificaciones por curso',
                            data: <?php echo json_encode($promedios); ?>,
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 205, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(201, 203, 207, 0.6)'
                            ],

                            borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                            ],

                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                ticks: { color: '#4D4D4D'}
                            },
                            x: {
                                ticks: { color: '#4D4D4D',
                                        font: {
                                            size: 15
                                        } }
                            },
                        }, 
                        plugins: {
                            tooltip: {
                                enabled: false // <-- this option disables tooltips
                            }, 
                            legend: {
                                labels: {
                                    font: {
                                        size: 25
                                    }, 
                                }
                            }
                        }
                    }
                });
            </script>
        
        </div>
        
    </div>

    <div id = "calificaciones">
        <?php
            if(isset($_SESSION["usuario"])){
                $alumno = $_SESSION["usuario"];
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $dbname = "proyecto";
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                $query = mysqli_query($conn, "SELECT * FROM Calificaciones WHERE ID='$alumno'");
                $nombre_query = mysqli_query($conn, "SELECT Nombre FROM Usuarios WHERE ID='$alumno'");
                $nombre_row = mysqli_fetch_assoc($nombre_query);
                $nombre = $nombre_row['Nombre'];
                echo "<h2>Calificaciones de $nombre</h2>";
                echo "<div id='centrar'><table>";
                echo "<thead><tr><th>Curso</th><th>Calificación</th></tr></thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_assoc($query)) {
                    $id = $row['ID'];
                    $calificacion = $row['Calificación'];
                    $curso_query = mysqli_query($conn, "SELECT Curso FROM Calificaciones WHERE ID='$alumno' AND Calificación='$calificacion'");
                    $curso = mysqli_fetch_assoc($curso_query)['Curso'];
                    echo "<tr><td>".$curso."</td><td>".$calificacion."</td></tr>";
                }
                echo "</tbody>";
                echo "</table></div>";
            }
        ?>
    </div>

        <script>
            // Obtenemos los elementos que queremos ocultar
            var cursosDiv = document.getElementById("Cursos");
            var calificacionesDiv = document.getElementById("calificaciones");
            var inicioDiv = document.getElementById("inicio");
            var estaDiv = document.getElementById("estadisticas");
            var juego = document.getElementById("juego");
            var icoj = document.getElementById("icon");


            // Ocultamos los elementos al cargar la página
            cursosDiv.style.display = "none";
            calificacionesDiv.style.display = "none";
            estaDiv.style.display = "none";
            juego.style.display = "none";


            function Calificaciones(){
                cursosDiv.style.display = "none";
                estaDiv.style.display = "none";
                inicioDiv.style.display = "none";
                calificacionesDiv.style.display = "block";
            }

            function Cursos(){
                estaDiv.style.display = "none";
                inicioDiv.style.display = "none";
                calificacionesDiv.style.display = "none";
                cursosDiv.style.display = "block";
            }

            function Inicio(){
                inicioDiv.style.display = "block";
                calificacionesDiv.style.display = "none";
                cursosDiv.style.display = "none";
                estaDiv.style.display = "none";
            }

            function Estadisticas(){
                inicioDiv.style.display = "none";
                calificacionesDiv.style.display = "none";
                cursosDiv.style.display = "none";
                estaDiv.style.display = "block";
            }
            
            function Juego(){
                inicioDiv.style.display = "block";
                calificacionesDiv.style.display = "none";
                cursosDiv.style.display = "none";
                estaDiv.style.display = "none";
                juego.style.display = "inline-flex";
                icon.style.display = "none";

            }

        </script>
</body>
</html>
