<?php
	$num  = $_POST["numero"];
	$nombre = $_POST["nom"];
	switch($num)
	{
		case 1:
			$res= $nombre." "."- NIVEL 1 REANIMACIÓN. Tiempo de atención por médico y enfermera inmediato.";
			$img1="images/nivel1.jpg";
		break;
		case 2:
      $res= $nombre." "."- NIVEL 2 EMERGENCIA. Tiempo de atención por médico y enfermera hasta 15 minutos de espera.";
			$img1="images/nivel2.jpg";
		break;
		case 3:
			$res= $nombre." "."- NIVEL 3 URGENCIA. Tiempo de atención por médico y enfermera hasta 30 minutos de espera.";
			$img1="images/nivel3.jpg";
		break;
		case 4:
			$res= $nombre." "."- NIVEL 4 PRIORITARIO. Tiempo de atención por médico y enfermera hasta 60 minutos de espera.";
			$img1="images/nivel4.jpg";
		break;
		case 5:
			$res= $nombre." "."- NIVEL 5 NO URGENTE. Tiempo de atención por médico y enfermera hasta 120 minutos de espera.";
			$img1="images/nivel5.jpg";
		break;
		default:
			$res="Otro";
		break;
	}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Resultado Triage</title>
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
          <h1 class="page-header-title"><img src="<?php echo $img1?>" width="200px" class=""><br class="d-none d-xs-block"><?php echo $res?><br class="d-none d-xs-block">
          </h1>
        </div>
      </header>
      
      
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