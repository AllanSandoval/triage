<?php

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Index Triage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400%7CMontserrat:400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
      
      <header class="page-header context-dark wow fadeIn" style="background-image: url(images/header.jpg)">
        <div class="container">
          <div class="row row-30">
            <div class="col-sm-6"><a ><img src="images/triage.png" alt="" width="343" height="124"/></a></div>
            <div class="col-sm-6 text-sm-right">
              <h6>Contáctanos para más información!</h6>
              <h2><a >(+52) 8211183368</a></h2>
              <p>Los 7 días de la semana de 8:00am a 7:00pm</p>
            </div>
          </div>
          <h1 class="page-header-title">Clasificación<br class="d-none d-xs-block">Triage<br class="d-none d-xs-block">Nivel de urgencias
          </h1>
        </div>
      </header>
      <section class="section-double wow fadeIn">
        <div class="section-double-item section-double-item-primary context-dark">
          <div class="section-double-content">
            <div class="unit unit-spacing-lg unit-xl d-block d-lg-flex">
              <div class="unit-left">
                <div class="h1 section-double-content-title"><span>Triage</span></div>
              </div>
              <div class="unit-body">
                <ul class="list list-xl">
                  <li>
                    <h2>¿Qué es?</h2>
                    <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
              
              
              <div class="form-wrap">
                <p>Es un término francés utilizado para seleccionar, escoger o priorizar. El triage es una escala de gravedad, que permite establecer un proceso de valoración clínica preliminar a los pacientes, antes de la valoración, diagnóstico y terapéutica completa en el servicio de urgencias.<br>
                </p>                
              </div>
              <div class="form-wrap">
                <h3>Objetivos de proyecto</h3>
                <p>.-Realizar un software desarrollado en PHP que permita automatizar el proceso de toma de decisiones de Triage para una institución de salud.<br>
                </p>
                <p>.-Documentar el proceso del Triage así como también desarrollar un breve manual de usuario que indique el uso básico de la aplicación.<br>
                </p>
                <p>.-Realizar un video que explique de manera general que es el Triage y su uso, así como también un funcionamiento básico del software.<br>
                </p>                
              </div>
              <div class="form-wrap">
                <h4>Ojo...</h4>
                <p>El orden en que los pacientes son atendidos se basa en el nivel de gravedad que tienen, y NO por el orden en el que llegan al hospital.<br>
                </p>                
              </div>
              </form>
            
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="section-double-item section-double-item-light">
          <div class="section-double-content">
            <h2 class="text-accent">Ingrese los datos solicitados</h2>
            <form role="form" class="interno" data-form-type="contact" action="resultado.php" method="POST">
            <div class="form-wrap">
                <label class="form-label" for="first-name">Nombre(s):</label>
                <input class="form-input" id="first-name" type="text" name="nom" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="appaterno">Apellido paterno:</label>
                <input class="form-input" id="appaterno" type="text" name="appaterno" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="apmaterno">Apellido materno:</label>
                <input class="form-input" id="apmaterno" type="text" name="apmaterno" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="edad">Edad:</label>
                <input class="form-input" id="edad" type="text" name="edad" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="nac">Fecha de nacimiento:</label>
                <input class="form-input" id="nac" type="text" name="fnac" data-constraints="@Required">
              </div>
              <div class="form-wrap">
              <select class="form-input" id="sexo" name="sexo" data-constraints="@Required" data-placeholder="Sexo:">
                  <option label="placeholder"></option>
                  <option>Hombre</option>
                  <option>Mujer</option>                  
                </select>
              </div>
              <div class="form-wrap">
                <label class="form-label" for="estatura">Estatura en cm:</label>
                <input class="form-input" id="estatura" type="text" name="estatura" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="segso">Número de seguro social:</label>
                <input class="form-input" id="segso" type="text" name="numsegso" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="profesion">Profesión:</label>
                <input class="form-input" id="profesion" type="text" name="profesion" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="idioma">Idioma:</label>
                <input class="form-input" id="idioma" type="text" name="idioma" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="nacionalidad">Nacionalidad:</label>
                <input class="form-input" id="nacionalidad" type="text" name="nacionalidad" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="religion">Religión:</label>
                <input class="form-input" id="religion" type="text" name="religion" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="civil">Estado civil:</label>
                <input class="form-input" id="civil" type="text" name="civil" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="domicilio">Domicilio:</label>
                <input class="form-input" id="domicilio" type="text" name="domicilio" data-constraints="@Required">
              </div>                            
              <div class="form-wrap">
                <label class="form-label" for="origen">Ciudad de origen:</label>
                <input class="form-input" id="origen" type="text" name="lugori" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="phone">Telefono:</label>
                <input class="form-input" id="phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="email">E-mail:</label>
                <input class="form-input" id="email" type="email" name="email" data-constraints="@Required @Email">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="sangre">Tipo de sangre:</label>
                <input class="form-input" id="sangre" type="text" name="sangre" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label" for="discapacidad">Alguna discapacidad:</label>
                <input class="form-input" id="discapacidad" type="text" name="discapacidad" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <select class="form-input" id="program" name="numero" data-constraints="@Required" data-placeholder="¿Cuál es la hemergencia?">
                  <option label="placeholder"></option>
                        <option value="1">Dificultad respiratoria severa</option>
												<option value="1">Estado de inconciencia</option>
												<option value="1">Ausencia de signos vitales aparentes</option>
												<option value="1">Trauma mayor</option>
												<option value="1">Hemorragia masiva</option>
												<option value="1">Problemas cardiorespiratorios/neurológicos severos</option>
												<option value="1">Hemergencia hipertensiva</option>
												<option value="1">Paro respiratorio</option>
												<option value="1">Quemaduras mayores</option>
												<option value="1">Convulsiones activas</option>
												<option value="1">Heridas penetrantes</option>
												<option value="1">Trabajo en parto expulsivo</option>
												<option value="2">Perdida de una extremidad u organo</option>
												<option value="2">Agitación psicomotora</option>
												<option value="2">Dolor torácico y abdominal severo</option>
												<option value="2">Diabetes descompensada</option>
												<option value="2">Cefalea severa</option>
												<option value="2">Fiebre alta en niños</option>
												<option value="2">Cólico</option>
												<option value="2">Trauma con hemorragia</option>
												<option value="2">Amputación traumática</option>
												<option value="2">Quemaduras menores</option>
												<option value="2">Intento suicida</option>
												<option value="2">Abuso sexual</option>
												<option value="2">Deshidratación severa</option>
												<option value="3">Estabilidad ventilatoria hemodinámica y neurológica</option>
												<option value="3">Cefalea</option>
												<option value="3">Dolor torásico leve estable</option>
                        <option value="3">Asma leve o moderada</option>
                        <option value="3">Sangrado leve moderado</option>
                        <option value="3">Síntomas asociados a procedimientos</option>
                        <option value="3">Dolor moderado</option>
												<option value="4">Deterioro potencial</option>
												<option value="4">Cefalea leve</option>
												<option value="4">Depresión</option>
                        <option value="4">Mareo</option>
                        <option value="4">Dolor abdominal leve</option>
												<option value="5">Trauma menor</option>
												<option value="5">Estrés emocional</option>
												<option value="5">Faringitis</option>
												<option value="5">Síndrome gripal</option>
                        <option value="5">Diarrea</option>
                        <option value="5">Amigdalitis</option>
                </select>
              </div>
              
              <div class="form-button">
                <button class="button button-block button-primary" type="submit">Enviar Datos</button>
                <button class="button button-block button-primary" type="reset">Reiniciar formulario</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      
      <footer class="section section-lg footer-classic wow fadeIn">
        <div class="container">
          <div class="row row-30 flex-md-row-reverse">
            <div class="col-md-7 col-lg-6 text-md-right">
              <p>Instituto Tecnológico de Linares</p>
              <h2><a >(+52) 8211183368</a></h2>
              <ul class="list-inline">
                <li><a class="icon icon-lg icon-primary fa-facebook-f" ></a></li>
                <li><a class="icon icon-lg icon-primary fa-twitter" ></a></li>
                <li><a class="icon icon-lg icon-primary fa-instagram" ></a></li>
                <li><a class="icon icon-lg icon-primary fa-youtube" ></a></li>
              </ul>
            </div>
            <div class="col-md-5 col-lg-6">
              <div class="unit align-items-center unit-spacing-xs d-block d-sm-flex d-md-block d-lg-flex">
                <div class="unit-left"><a ><img src="images/triage.png" alt="" width="343" height="124"/></a></div>
                <div class="unit-body">
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>|</span> <span>Derechos reservados. Diseñado por Allan y Romario</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by gel-->
  </body>
</html>