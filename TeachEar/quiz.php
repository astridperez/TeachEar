<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/estiloalumnoquiz.css">

</head>
    <body>

        <p id = 'inicio'>Quiz de <?php echo $_GET['materia']; ?></p>

        <div class="container">
            <div class="center">
                <button class="btnIn" onclick ="Inicio()">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                    </svg>
                    <span>iniciar</span>
                </button>
            </div>
        </div>
    
        <?php
            $materia = $_GET['materia'];
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "proyecto";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            $query = mysqli_query($conn, "SELECT Pregunta, Respuesta FROM QUIZZES WHERE Materia='$materia'");

            $preguntas = array(); 
            $respuestas = array(); 
            $num_pregunta = 0;

            while($row = mysqli_fetch_assoc($query)) {
                $pregunta = $row["Pregunta"];
                array_push($preguntas, $pregunta);
                $respuesta = $row["Respuesta"];
                array_push($respuestas, $respuesta);
                $num_pregunta++;
            }

            echo  '<div class="voice_to_text"> <div class="alinear"> <textarea id="convert_text"></textarea> <button id="click_to_record" onclick="Escucha()">RECORD</button> </div></div>';
        ?>
        <script>
            var preguntas = <?php echo json_encode($preguntas); ?>;
            var respuestas = <?php echo json_encode($respuestas); ?>;

            var synth = window.speechSynthesis;

            var botonGrabacion = document.getElementById("click_to_record");
            var salidaTexto = document.getElementById("convert_text");

            var preguntaActual = 0;
            var cal = 0;
            var long = preguntas.lenght;
            var preguntaNode = document.createElement("h1");

            function Inicio() {
                const btnIn = document.querySelector(".btnIn");
                const convertText = document.getElementById("convert_text");
                const click_to_record = document.getElementById("click_to_record");
                const p = document.getElementById("inicio");

                preguntaNode.textContent = preguntas[preguntaActual];
                var voiceToTextNode = document.querySelector(".voice_to_text");
                voiceToTextNode.insertBefore(preguntaNode, voiceToTextNode.firstChild);

                btnIn.style.display = "none";
                convertText.style.display = "block";
                click_to_record.style.display = "block";
                p.style.display = "none";
            }

            function Escucha() {
                var speech = true;
                window.SpeechRecognition = window.webkitSpeechRecognition;
                const recognition = new SpeechRecognition();
                recognition.interimResults = true;               

                recognition.addEventListener('result', e => {
                    const transcript = Array.from(e.results)
                    .map(result => result[0])
                    .map(result => result.transcript)
                    .join('')

                    document.getElementById("convert_text").innerHTML = 'Su respuesta fue: ' + "'" + transcript + "'";

                    if (preguntaActual < preguntas.length) {
                        if (respuestas[preguntaActual].includes(transcript)) {
                            var corr = new SpeechSynthesisUtterance("Correcto");
                            corr.lang = 'es-ES';
                            synth.speak(corr);
                            preguntaActual++;
                            cal++;
                            if (preguntaActual < preguntas.length) {
                                preguntaNode.textContent = preguntas[preguntaActual];
                                var msg = new SpeechSynthesisUtterance(preguntas[preguntaActual]);
                                msg.lang = 'es-ES';
                                synth.speak(msg);
                            } 
                            else {
                                calif = cal / long;
                                preguntaNode.textContent = 'Terminaste \n Calificación: ' + calif;
                                botonGrabacion.style.display = 'none';
                                
                            }
                        } 
                        
                        else {
                            var incorr = new SpeechSynthesisUtterance("Incorrecto");
                            incorr.lang = 'es-ES';
                            synth.speak(incorr);
                        }
                    }
                });

                if (speech == true) {
                    recognition.start();
                }
                };

        </script>
    </body>
</html>