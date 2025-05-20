<?php get_header(); ?> 



<h2>🇵🇾 Trivia Paraguaya</h2>
<p class="puntuacion">Puntos: <span id="puntos">0</span> | Tiempo: <span id="tiempo">15</span>s</p>
<audio id="correcto" src="https://www.myinstants.com/media/sounds/correct.mp3"></audio>
<audio id="incorrecto" src="https://www.myinstants.com/media/sounds/incorrect.mp3"></audio>

<h2>🎓 ¿Quién soy? – Personajes históricos del Paraguay</h2>
<p><strong>Responde las preguntas antes de que se acabe el tiempo. ¡Suma puntos y aprende!</strong></p>
<div id="juego">

  <!-- Pregunta 1 -->
<div id="pregunta0">
  <p><strong>1:</strong> ¿Quién fue el primer presidente del Paraguay?</p>
  <button onclick="responder(0, 'rodriguez de francia')">José Gaspar Rodríguez de Francia</button>
  <button onclick="responder(0, 'solano lopez')">Francisco Solano López</button>
  <button onclick="responder(0, 'stroessner')">Alfredo Stroessner</button>
  <p id="resultado0"></p>
</div>

<!-- Pregunta 2 -->
<div id="pregunta1" style="display:none;">
  <p><strong>2:</strong> ¿Quién fue presidente durante la Guerra de la Triple Alianza?</p>
  <button onclick="responder(1, 'solano lopez')">Francisco Solano López</button>
  <button onclick="responder(1, 'carlos lopez')">Carlos Antonio López</button>
  <button onclick="responder(1, 'eusebio ayala')">Eusebio Ayala</button>
  <p id="resultado1"></p>
</div>

<!-- Pregunta 3 -->
<div id="pregunta2" style="display:none;">
  <p><strong>3:</strong> ¿Cómo se llamaban las mujeres que ayudaron en la Guerra de la Triple Alianza?</p>
  <button onclick="responder(2, 'residentas')">Las Residentas</button>
  <button onclick="responder(2, 'madama lynch')">Madama Lynch</button>
  <button onclick="responder(2, 'marias valientes')">Marías Valientes</button>
  <p id="resultado2"></p>
</div>

<!-- Pregunta 4 -->
<div id="pregunta3" style="display:none;">
  <p><strong>4:</strong> ¿En qué ciudad se firmó la independencia del Paraguay?</p>
  <button onclick="responder(3, 'asuncion')">Asunción</button>
  <button onclick="responder(3, 'encarnacion')">Encarnación</button>
  <button onclick="responder(3, 'ciudad del este')">Ciudad del Este</button>
  <p id="resultado3"></p>
</div>

<!-- Pregunta 5 -->
<div id="pregunta4" style="display:none;">
  <p><strong>5:</strong> ¿Quién fue presidente durante la Guerra del Chaco?</p>
  <button onclick="responder(4, 'eusebio ayala')">Eusebio Ayala</button>
  <button onclick="responder(4, 'carlos lopez')">Carlos Antonio López</button>
  <button onclick="responder(4, 'bernardino caballero')">Bernardino Caballero</button>
  <p id="resultado4"></p>
</div>

<!-- Pregunta 6 -->
<div id="pregunta5" style="display:none;">
  <p><strong>6:</strong> ¿Qué dictador gobernó Paraguay de 1954 a 1989?</p>
  <button onclick="responder(5, 'stroessner')">Alfredo Stroessner</button>
  <button onclick="responder(5, 'solano lopez')">Francisco Solano López</button>
  <button onclick="responder(5, 'rodriguez de francia')">José Gaspar Rodríguez de Francia</button>
  <p id="resultado5"></p>
</div>

<!-- Pregunta 7 -->
<div id="pregunta6" style="display:none;">
  <p><strong>7:</strong> ¿Qué escritor paraguayo escribió "Yo el Supremo"?</p>
  <button onclick="responder(6, 'augusto roa bastos')">Augusto Roa Bastos</button>
  <button onclick="responder(6, 'elvio romero')">Elvio Romero</button>
  <button onclick="responder(6, 'gabriel casaccia')">Gabriel Casaccia</button>
  <p id="resultado6"></p>
</div>

<!-- Pregunta 8 -->
<div id="pregunta7" style="display:none;">
  <p><strong>8:</strong> ¿Quién fue el primer presidente tras la dictadura de Stroessner?</p>
  <button onclick="responder(7, 'wasmosy')">Juan Carlos Wasmosy</button>
  <button onclick="responder(7, 'raul cubas')">Raúl Cubas</button>
  <button onclick="responder(7, 'eusebio ayala')">Eusebio Ayala</button>
  <p id="resultado7"></p>
</div>

<!-- Pregunta 9 -->
<div id="pregunta8" style="display:none;">
  <p><strong>9:</strong> ¿Cuál es el idioma oficial junto con el español en Paraguay?</p>
  <button onclick="responder(8, 'guarani')">Guaraní</button>
  <button onclick="responder(8, 'portugues')">Portugués</button>
  <button onclick="responder(8, 'ingles')">Inglés</button>
  <p id="resultado8"></p>
</div>

<!-- Pregunta 10 -->
<div id="pregunta9" style="display:none;">
  <p><strong>10:</strong> ¿Qué instrumento musical es tradicional en Paraguay?</p>
  <button onclick="responder(9, 'arpa')">Arpa paraguaya</button>
  <button onclick="responder(9, 'violin')">Violín</button>
  <button onclick="responder(9, 'flauta')">Flauta</button>
  <p id="resultado9"></p>
</div>

<!-- Pregunta 11 -->
<div id="pregunta10" style="display:none;">
  <p><strong>11:</strong> ¿Quién fue conocido por la música "Pájaro Campana"?</p>
  <button onclick="responder(10, 'felix perez cardozo')">Félix Pérez Cardozo</button>
  <button onclick="responder(10, 'agustin barrios')">Agustín Barrios</button>
  <button onclick="responder(10, 'jose a. flores')">José Asunción Flores</button>
  <p id="resultado10"></p>
</div>

<!-- Pregunta 12 -->
<div id="pregunta11" style="display:none;">
  <p><strong>12:</strong> ¿Qué flor es símbolo nacional del Paraguay?</p>
  <button onclick="responder(11, 'mburucuyá')">Mburucuyá</button>
  <button onclick="responder(11, 'jazmín')">Jazmín</button>
  <button onclick="responder(11, 'rosa')">Rosa</button>
  <p id="resultado11"></p>
</div>

<!-- Pregunta 13 -->
<div id="pregunta12" style="display:none;">
  <p><strong>13:</strong> ¿Cuál es el río más importante de Paraguay?</p>
  <button onclick="responder(12, 'paraguay')">Río Paraguay</button>
  <button onclick="responder(12, 'amazonas')">Amazonas</button>
  <button onclick="responder(12, 'parana')">Río Paraná</button>
  <p id="resultado12"></p>
</div>

<!-- Pregunta 14 -->
<div id="pregunta13" style="display:none;">
  <p><strong>14:</strong> ¿Cuál es el deporte más popular en Paraguay?</p>
  <button onclick="responder(13, 'futbol')">Fútbol</button>
  <button onclick="responder(13, 'voley')">Vóley</button>
  <button onclick="responder(13, 'atletismo')">Atletismo</button>
  <p id="resultado13"></p>
</div>

<!-- Pregunta 15 -->
<div id="pregunta14" style="display:none;">
  <p><strong>15:</strong> ¿Cuál es la capital de Paraguay?</p>
  <button onclick="responder(14, 'asuncion')">Asunción</button>
  <button onclick="responder(14, 'encarnacion')">Encarnación</button>
  <button onclick="responder(14, 'luque')">Luque</button>
  <p id="resultado14"></p>
</div>

<!-- Pregunta 16 -->
<div id="pregunta15" style="display:none;">
  <p><strong>16:</strong> ¿Qué significa “Guaraní” además de idioma?</p>
  <button onclick="responder(15, 'moneda')">Moneda del Paraguay</button>
  <button onclick="responder(15, 'deporte')">Deporte típico</button>
  <button onclick="responder(15, 'danza')">Danza popular</button>
  <p id="resultado15"></p>
</div>

<!-- Pregunta 17 -->
<div id="pregunta16" style="display:none;">
  <p><strong>17:</strong> ¿Qué bebida tradicional se consume fría con yerba?</p>
  <button onclick="responder(16, 'terere')">Tereré</button>
  <button onclick="responder(16, 'mate')">Mate</button>
  <button onclick="responder(16, 'café')">Café</button>
  <p id="resultado16"></p>
</div>

<!-- Pregunta 18 -->
<div id="pregunta17" style="display:none;">
  <p><strong>18:</strong> ¿Qué fruta se usa en el postre “ka’i ladrillo”?</p>
  <button onclick="responder(17, 'banana')">Banana</button>
  <button onclick="responder(17, 'mani')">Maní</button>
  <button onclick="responder(17, 'azúcar')">Azúcar</button>
  <p id="resultado17"></p>
</div>

<!-- Pregunta 19 -->
<div id="pregunta18" style="display:none;">
  <p><strong>19:</strong> ¿Qué animal aparece en el escudo nacional?</p>
  <button onclick="responder(18, 'leon')">León</button>
  <button onclick="responder(18, 'jaguar')">Jaguar</button>
  <button onclick="responder(18, 'condor')">Cóndor</button>
  <p id="resultado18"></p>
</div>

<!-- Pregunta 20 -->
<div id="pregunta19" style="display:none;">
  <p><strong>20:</strong> ¿Cuál es una danza típica del Paraguay?</p>
  <button onclick="responder(19, 'polka paraguaya')">Polka Paraguaya</button>
  <button onclick="responder(19, 'samba')">Samba</button>
  <button onclick="responder(19, 'cueca')">Cueca</button>
  <p id="resultado19"></p>
</div>
<div id="mensajeBienvenida"></div>

<div id="juego">

    <?php get_footer(); ?>