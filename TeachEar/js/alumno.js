// Importar la función "speechSynthesis" del objeto "window"
var synth = window.speechSynthesis;

// Obtener los elementos HTML necesarios
var botonGrabacion = document.getElementById("click_to_record");
var salidaTexto = document.getElementById("convert_text");

// Preguntas y respuestas
var preguntas = [];

var respuestas = [];

var preguntaActual = 0;

// Función para inicializar la página
function Inicio(){
  const btnIn = document.querySelector(".btnIn");
  const convertText = document.getElementById("convert_text");
  const click_to_record = document.getElementById("click_to_record");
  const p = document.getElementById("inicio");

  // Ocultar el botón de inicio y mostrar los elementos necesarios
  btnIn.style.display = "none";
  convertText.style.display = "block";
  click_to_record.style.display = "block";
  preguntas[preguntaActual].style.display = 'inline';
}

botonGrabacion.addEventListener('click', function() {
  // Inicializar la variable para activar o desactivar la grabación
  var speech = true;

  // Usar la función de reconocimiento de voz de la API de Web Speech (en este caso, para navegadores basados en WebKit)
  window.SpeechRecognition = window.webkitSpeechRecognition;
  const recognition = new SpeechRecognition();

  // Establecer la opción "interimResults" en "true" para obtener resultados provisionales mientras se está hablando
  recognition.interimResults = true;

  // Escuchar el evento "result" para obtener los resultados del reconocimiento de voz
  recognition.addEventListener('result', e => {
    // Convertir los resultados en un arreglo y luego en una cadena de texto
    const transcript = Array.from(e.results)
      .map(result => result[0])
      .map(result => result.transcript)
      .join('')

    // Mostrar la respuesta del usuario en la página
    document.getElementById("convert_text").innerHTML = 'Su respuesta fue: ' + "'" + transcript + "'";

    // Comprobar si aún hay preguntas por responder
    if (preguntaActual < preguntas.length) {
      // Comprobar si la respuesta del usuario está en la lista de respuestas correctas
      if (respuestas[preguntaActual].some(answer => transcript.includes(answer))) {
        // Si la respuesta es correcta, decirlo en voz alta y esconder la pregunta anterior para mostrar la siguiente
        var corr = new SpeechSynthesisUtterance("Su respuesta es correcta");
        corr.lang = 'es-ES';
        synth.speak(corr);
        preguntas[preguntaActual].style.display = 'none';
        preguntaActual++;

        if (preguntaActual < preguntas.length) {
          preguntas[preguntaActual].style.display = 'inline';
          var msg = new SpeechSynthesisUtterance(preguntas[preguntaActual].textContent);
          msg.lang = 'es-ES';
          synth.speak(msg);
        } 
        
        else {
          //mostrar el mensaje de ganado
          document.getElementById("win").style.display = 'inline';
          document.getElementById("convert_text").style.display = 'none';
          botonGrabacion.style.display = 'none';
        }
      }
    }
  });
  
  if(speech == true){
    recognition.start();
  }

});
