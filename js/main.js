const respuestasCorrectas = [
  "rodriguez de francia", "solano lopez", "residentas", "asuncion", "eusebio ayala",
  "stroessner", "augusto roa bastos", "wasmosy", "guarani", "arpa",
  "felix perez cardozo", "mburucuyá", "paraguay", "futbol", "asuncion",
  "moneda", "terere", "mani", "leon", "polka paraguaya"
];

let preguntaActual = 0;
let puntos = 0;
let tiempo = 15;
let intervalo;
let respuestasCorrectasConsecutivas = 0;

// Recupera el puntaje del LocalStorage (si existe)
const puntajeGuardado = localStorage.getItem("puntaje");
if (puntajeGuardado) {
  // Si hay un puntaje guardado, lo muestra en la pantalla de inicio.
  document.getElementById("mensajeBienvenida").innerText = `¡Bienvenido de nuevo! Tu último puntaje fue: ${puntajeGuardado} puntos.`;
}

function actualizarTiempo() {
  document.getElementById("tiempo").innerText = tiempo;
  tiempo--;
  if (tiempo < 0) {
    siguientePregunta(false);
  }
}

function responder(num, resp) {
  const respuestaCorrecta = respuestasCorrectas[num];
  const esCorrecto = resp.toLowerCase() === respuestaCorrecta.toLowerCase();
  const resultado = document.getElementById("resultado" + num);

  clearInterval(intervalo); // Detener el intervalo actual

  if (esCorrecto) {
    let tiempoBonus = 0;
    const tiempoRespuestaActual = 15 - tiempo;
    if (tiempoRespuestaActual < 5) tiempoBonus = 2;

    puntos++;
    puntos += tiempoBonus;
    resultado.innerHTML = `✅ ¡Correcto! ${tiempoBonus > 0 ? `+${tiempoBonus} por rapidez` : ''}`;
    document.getElementById("correcto").play();

    respuestasCorrectasConsecutivas++;
    if (respuestasCorrectasConsecutivas >= 3) {
      puntos += 5;
      resultado.innerHTML += " 🎉 ¡Bono de 5 puntos por 3 aciertos consecutivos!";
    }

  } else {
    resultado.innerHTML = `❌ Incorrecto. La respuesta era: ${respuestaCorrecta}`;
    document.getElementById("incorrecto").play();
    respuestasCorrectasConsecutivas = 0;
  }

  document.getElementById("puntos").innerText = puntos;

  setTimeout(() => {
    siguientePregunta(esCorrecto);
  }, 1500);
}

function siguientePregunta(esCorrecto) {
  // Detener el intervalo al cambiar de pregunta
  clearInterval(intervalo);

  document.getElementById("pregunta" + preguntaActual).style.display = "none";
  preguntaActual++;

  if (preguntaActual < respuestasCorrectas.length) {
    mostrarPregunta(preguntaActual);
  } else {
    mostrarPantallaFinal();
  }
}

function mostrarPregunta(index) {
  // Detener cualquier intervalo antes de iniciar uno nuevo
  clearInterval(intervalo);

  document.getElementById("pregunta" + index).style.display = "block";
  tiempo = 15; // Reiniciar el tiempo para la nueva pregunta
  intervalo = setInterval(actualizarTiempo, 1000); // Iniciar un nuevo intervalo para el temporizador
}

function mostrarPantallaFinal() {
  // Detener el intervalo y mostrar la pantalla final
  clearInterval(intervalo);
  
  document.getElementById("juego").style.display = "none";
  const pantallaFinal = document.getElementById("final");
  pantallaFinal.style.display = "block";

  // Mostrar el puntaje final
  pantallaFinal.innerHTML = `🎉 ¡Juego terminado! Tu puntaje fue ${puntos} de ${respuestasCorrectas.length * 2 + 5}.`;

  // Mostrar las respuestas correctas
  const respuestasDiv = document.createElement("div");
  respuestasDiv.innerHTML = "<h3>Respuestas correctas:</h3>";

  respuestasCorrectas.forEach((respuesta, index) => {
    respuestasDiv.innerHTML += `<p><strong>Pregunta ${index + 1}:</strong> ${respuesta}</p>`;
  });

  pantallaFinal.appendChild(respuestasDiv);

  // Opción para reiniciar el juego
  const botonReiniciar = document.createElement("button");
  botonReiniciar.textContent = "Reiniciar juego";
  botonReiniciar.onclick = function() {
    localStorage.removeItem("puntaje"); // Eliminar puntaje guardado al reiniciar
    location.reload(); // Recargar la página para reiniciar el juego
  };
  pantallaFinal.appendChild(botonReiniciar);

  // Guardar el puntaje final en LocalStorage
  localStorage.setItem("puntaje", puntos);
}
