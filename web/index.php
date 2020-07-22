<?php

session_start();
$digit1 = mt_rand(1,20);
$digit2 = mt_rand(1,20);
if( mt_rand(0,1) === 1 ) {
    $math = "$digit1 + $digit2";
    $_SESSION['answer'] = $digit1 + $digit2;
} else {
    $math = "$digit1 - $digit2";
    $_SESSION['answer'] = $digit1 - $digit2;
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>CV - Victor Manuel Recio</title>
<meta name="description" content="">
<meta name="author" content="vmrecio">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
  ================================================== -->

<link rel="stylesheet" href="stylesheets/animate.css">
<link rel="stylesheet" href="stylesheets/layout.css">
<link rel="stylesheet" href="stylesheets/responsive.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        var d = new Date();
        var anionow = d.getFullYear();
    </script>

 

<!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="stylesheets/ie7.css">
<![endif]-->
<!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Favicons
	================================================== -->
<link rel="shortcut icon" href="img/favicon.png">



</head>
<body>

<!-- Primary Page Layout
	================================================== --> 
     <!-- Start  Mobile & Tab Header-->
    <div class="rzm_mobile_header col-sm-12 col-xs-12 hidden-lg hidden-md" >
        <div class="mob_nav  navbar navbar-inverse navbar-fixed-top" id="slide-nav">
        	
        	<div class="navbar-header">
				 <a class="navbar-toggle"></a>
             </div>

             <div id="slidemenu" class="navbar-default navbar-inverse">
                    <ul class="nav navbar-nav primary">
               
                    <li><a href="#home">Sobre mí</a></li>
                    <li><a href="#experience">Experiencia</a></li>
                    <li><a href="#client">Clientes</a></li>
                    <li><a href="#education">Educación</a></li>
                    <li><a href="#testimonial">Recomendaciones</a></li>
                    <li><a class="contact-form" href="#contact">Contacto</a></li>
                    
                  </ul>
             </div>
        </div>
    </div>
  
    <!-- End  Mobile & Tab Header-->
   <!-- Start outside-header -->
<div class="rzm_outside-header" id="home">
 
  
</div>
<!-- End outside-header -->
<!-- Start Outside Main -->

<div class="outside-main" id="page-content">
  
  <!-- Start Main Container -->
  <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-12 rzm_profile_nav">
            <div class="sticky">
           <div class="logo">
                 <!--       
            <img src="img/profile_photo.jpg" alt="profile_photo" class="img-responsive img-circle">
            -->
            <img src="img/profile_photo_2.jpg" alt="profile_photo" class="img-responsive img-circle">

           </div>
             <!-- Start primary navigation -->
          <div class="rzm_main_menu hidden-sm hidden-xs">
              <ul class="primary">
           
                <li class="first"><a href="#home">Sobre mí</a></li>
                <li><a href="#experience">Experiencia</a></li>
                <li><a href="#client">Clientes</a></li>
                <li><a href="#education">Educación</a></li>
                <li><a href="#testimonial">Recomendaciones</a></li>
                <li><a class="contact-form" href="#contact">Contacto</a></li>
                <li><a href="#home" class="go_to_top">Top <i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
              </ul>
              
              <div class="social_nav">
               <a href="https://www.linkedin.com/in/victor-manuel-recio/" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               <!-- 
               <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
               <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
               <a href=""><i class="fa fa-behance" aria-hidden="true"></i></a>
               <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
               -->
              </div>
          </div>
          <!-- End Primary navigation -->
        </div>
    
        </div>
    
    <div class="clearfix"></div>
    <!-- Start Profile Section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 first profile rez_about">
      <div class="rez_top_title">
      		<h1>Hola, Soy Victor Manuel Recio</h1>
            <!--
            <p>Dime y lo olvido, enséñame y lo recuerdo, involúcrame y lo aprendo</p>
            <p class="leyenda"><a href="https://es.wikipedia.org/wiki/Benjamin_Franklin" target="blank" class="linkleyenda" STYLE="color: #808080;">- Benjamín Franklin -</a></p>
            -->
            <p>Para tener éxito no tienes que hacer cosas extraordinarias. Tan solo haz cosas ordinarias extraordinariamente bien.</p>
            <p class="leyenda"><a href="https://es.wikipedia.org/wiki/Jim_Rohn" target="blank" class="linkleyenda" STYLE="color: #808080;">- Jim Rohn -</a></p>

      </div>
      <h1 class="title">Sobre Mí</h1>
     
      <!-- Start About section -->
      <div class="col-md-12 col-sm-12 col-xs-12  omega  about">
        <p class="about_info">Conocedor de todo el mundo del Marketing Online desarrollo mis aptitudes técnicas para poder aplicar el 360º dentro del Customer Experience.<br><br>
            Llevo trabajando más de <script>var diferencia = anionow - 2009;document.write(diferencia);</script> años en el mundo del Contact Center y tengo amplia experiencia en cualquiera de los ámbitos de dicho sector.<br><br>            
            Además tengo suficientes conocimientos técnicos y experiencia para poder gestionar Equipos y/o Proyectos siempre teniendo como objetivo la satisfacción del cliente.<br><br>           
            He participado en el desarrollo de una herramienta Callmanager + CTI de la cual me siento orgulloso y puedo llegar a decir que la han usado más de 30 clientes diferentes y que aún la siguen usando. 
        </p>
    
        <div class="rzm_progress_bar">
            <h4>Administración de BBDD</h4>
            <small class="pull-right rzm_perchantage">100%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:10%;">
                    <span class="sr-only">100% Complete</span>
                  </div>
            </div>
        </div>
    
        <div class="rzm_progress_bar">
            <h4>Virtualización</h4>
            <small class="pull-right rzm_perchantage">90%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width: 10%;">
                    <span class="sr-only">90% Complete</span>
                  </div>
            </div>
            
        </div>

        <div class="rzm_progress_bar">
            <h4>Marketing</h4>
            <small class="pull-right rzm_perchantage">80%</small>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width:5%;">
                    <span class="sr-only">80% Complete</span>
                </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Administración de Sistemas</h4>
            <small class="pull-right rzm_perchantage">95%</small>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95" style="width:5%;">
                    <span class="sr-only">95% Complete</span>
                </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Integración Contínua</h4>
            <small class="pull-right rzm_perchantage">90%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width:5%;">
                    <span class="sr-only">90% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Desarrollo de Producto</h4>
            <small class="pull-right rzm_perchantage">70%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70" style="width:5%;">
                    <span class="sr-only">70% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Analítica TI</h4>
            <small class="pull-right rzm_perchantage">90%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width:5%;">
                    <span class="sr-only">90% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Asterisk</h4>
            <small class="pull-right rzm_perchantage">75%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75" style="width:5%;">
                    <span class="sr-only">75% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Docker & K8s</h4>
            <small class="pull-right rzm_perchantage">90%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90" style="width: 10%;">
                    <span class="sr-only">90% Complete</span>
                  </div>
            </div>
            
        </div>

        <div class="rzm_progress_bar">
            <h4>JavaScript</h4>
            <small class="pull-right rzm_perchantage">80%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width:5%;">
                    <span class="sr-only">80% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>Scripting</h4>
            <small class="pull-right rzm_perchantage">65%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65" style="width:5%;">
                    <span class="sr-only">65% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>LAMP</h4>
            <small class="pull-right rzm_perchantage">95%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95" style="width:5%;">
                    <span class="sr-only">95% Complete</span>
                  </div>
            </div>
        </div>

        <div class="rzm_progress_bar">
            <h4>HTML/CSS</h4>
            <small class="pull-right rzm_perchantage">60%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60" style="width: 5%;">
                    <span class="sr-only">80% Complete</span>
                  </div>
            </div>
        </div>
        
        <div class="rzm_progress_bar">
            <h4>Photoshop</h4>
            <small class="pull-right rzm_perchantage">70%</small>
            <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70" style="width: 10%;">
                    <span class="sr-only">70% Complete</span>
                  </div>
            </div>
        </div>
      </div>
      
      <!-- End About -->
      
      <div class="clear">
      </div>
      
    </section>
    <!-- End About section -->
   
   <!-- Start Experience section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_experience" id="experience">
      <h1 class="title">Experiencia Laboral  </h1>
      <div id="rzm_timeline">
            
        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge active_box badge-responsive">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Ene 2019 - Actualidad </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6 col-xs-12  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul active">
                                <li><span class="rzm_importo">SUM | The Sales Inteligence Company</span></li>
                                <li><span class="rzm_causale">Head Of Devops </span> </li>
                                
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

        <div class="row rzm_timeline-movement-inner">            

            <div class="rzm_timeline-badge ">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>May 2018 - Ene 2019</li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo"></span></li>
                                <li><span class="rzm_causale">IT Manager </span> </li>
                                </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge badge-responsive">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Jul 2016 - May 2018 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">Wise Conversion (Grupo Dominion)</span></li>
                                <li><span class="rzm_causale">IT Manager</span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>
          
        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge badge-responsive">    
            </div>
        
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Sep 2013 - Jul 2016 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">Grupo Edeas / La Moderna</span></li>
                                <li><span class="rzm_causale">IT Manager & Data Manager </span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

        <div class="row rzm_timeline-movement-inner">       

            <div class="rzm_timeline-badge">    
            </div>

            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Mar 2010 - Sep 2013 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo"></span></li>
                                <li><span class="rzm_causale">Administrador de bases de datos & Data Manager </span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge badge-responsive">    
            </div>
        
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Ene 2008 - Mar 2010 </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul">
                                <li><span class="importo">Infonis International</span></li>
                                <li><span class="rzm_causale">Configurador de entornos web y Administración de BBDD</span> </li>
                               
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>
    
        </div>
		    <div class="rzm_button">
        	<a href="doc/VictorMRecioCV.pdf" class="btn btn-sm btn-default" download><i class="fa fa-download" aria-hidden="true"></i>Descargar</a>
        </div>
    </section>
   <!-- End Experience section -->
   
   <!-- Start Client section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_client" id="client">
    	<h1 class="title">Clientes</h1>
        <p>He tenido la suerte de trabajar con grandes empresas de diversos sectores, participando en su modelo de negocio de TeleMarketing y venta Online.<br><br>
        Dentro del <strong>Sector de las Telecomunicaciones</strong> empresas como Telefónica, Vodafone, France Telecom (Orange y Jazztel), Grupo MasMovil y The Phone House.<br><br>
        En el <strong>Sector Asegurador</strong> empresas como Adeslas, Sanitas, Mapfre, Aegon y Metlife. Dentro del <strong>Sector Energético</strong> empresas como Endesa, Naturgi, EDP y Repsol.<br><br>
        Tambien en el <strong>Sector Farmaceutico</strong> he trabajado para Alter España, Bayer, Indas y Roche. sin olvidar también el <strong>Sector Bancario</strong>, trabajando para Empresas como Bankia y El Banco Santander.<br><br>
        Y por último he colaborado en diversos proyectos para <strong>Consultoras</strong> como Indra, Accenture y Everis.
        </p>
        <small>Todo ello sin olvidar la infinidad de proyecto de caracter Interno en los que he participado dentro de las empresas en las que he trabajado.</small>
        <div class="rzm_client_img" style="text-align: center;">
        	<img src="img/endesa.jpg" alt="">
            <img src="img/BancoSantander.jpg" alt="">
            <img src="img/Adeslas.png" alt="">
            <img src="img/Accenture.png" alt=""> 

            <img src="img/AlterEspaña.jpeg" alt="">
            <img src="img/Repsol.png" alt="">
            <img src="img/Bankia.png" alt="">
            <img src="img/francetelecom.jpeg" alt="">

            <img src="img/Bayer.jpg" alt="">
            <img src="img/mapfre.png" alt="">
            <img src="img/vodafone.png" alt="">
            <img src="img/indralogo.png" alt="">    
            
            <img src="img/Indas.png" alt="">
            <img src="img/Telefonica.jpg" alt="">
            <img src="img/Natugi.png" alt="">
            <img src="img/Sanitas.jpg" alt="">  

            <img src="img/metlife.png" alt="">
            <img src="img/Everis.png" alt="">
            <img src="img/edp.jpeg" alt="">
            <img src="img/masmovil.png" alt="">  

            <img src="img/aegon.png" alt="">
            <img src="img/indralogo.png" alt="">
            <img src="img/phonehouse.png" alt="">
            <img src="img/roche.png" alt="">  
        </div>
    </section>
   <!-- End Client section -->

   <!-- Start Education section -->
   <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_experience" id="education">
      <h1 class="title">Estudios Relevantes </h1>
      <div id="rzm_timeline">
            
        <div class="row rzm_timeline-movement">
        
            <div class="rzm_timeline-badge active_box badge-responsive">    
            </div>
        
        
            <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel credits">
                            <ul class="rzm_timeline-panel-ul">
                                <li>Nov 2019 - Actualidad </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6 col-xs-12  rzm_timeline-item">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                        <div class="rzm_timeline-panel debits">
                            <ul class="rzm_timeline-panel-ul active">
                                <li><img src="img/unir.png" alt="" class="educationlogo"></li>
                                <li><span class="rzm_importo">UNIR - La Universidad en Internet</span></li>
                                <li><span class="rzm_causale">Máster En Devops, Cloud Computing Y Automatización De Producción De Software</span> </li>
                                
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>

        <div class="row rzm_timeline-movement">
                
                    <div class="rzm_timeline-badge badge-responsive">    
                    </div>
                
                
                    <div class="col-sm-6 col-xs-12 rzm_timeline-item">
                        <div class="row">
                            <div class="col-sm-11 col-xs-12">
                                <div class="rzm_timeline-panel credits">
                                    <ul class="rzm_timeline-panel-ul">
                                        <li>2008</li>
                                    </ul>
                                </div>
                
                            </div>
                        </div>
                    </div>
                
                    <div class="col-sm-6  col-xs-12 rzm_timeline-item">
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-11 col-xs-12">
                                <div class="rzm_timeline-panel debits">
                                    <ul class="rzm_timeline-panel-ul">
                                        <li><img src="img/politecnica.jpg" alt="" class="educationlogo"></li>
                                        <li><span class="importo">Universidad Politécnica de Madrid</span></li>
                                        <li><span class="rzm_causale">Licenciatura en Ingeniería informática</span> </li>                                      
                                    </ul>
                                </div>
                
                            </div>
                        </div>
                    </div>
                    
          </div>
  
    </section>
   <!-- End Education section -->

   <!-- Start Testimonial section -->
    <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_Testimonial" id="testimonial">
    	<h1 class="title">Recomendaciones</h1>
        <div class="rzm_testimonial_content">
              <div id="carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel" data-slide-to="1"></li>
                  <li data-target="#carousel" data-slide-to="2"></li>
                  <li data-target="#carousel" data-slide-to="3"></li>
                  <li data-target="#carousel" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/angel.jpeg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Trabajo con Victor desde hace más de un año y decir que con él el trabajo es mucho más sencillo. Control increíble de todos los proyectos y sobre todo sabe compartir con los demás sus grandes conocimientos en el mundo IT.</p>
                              <blockquote class="adjust2">
                                <p>Ángel Orencio</p>
                                <small>Técnico de Sistemas, Grupo Sum</small> </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/maria.jpeg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>He trabajado en varios proyectos de tecnología y marketing digital con Victor y lo recomiendo sin dudar. No sólo tiene grandes conocimientos tecnológicos y recursos de vanguardia, si no que comprende la visión de negocio y los objetivos que pretende cumplir el proyecto, lo que sin duda supone un valor añadido y una garantía de éxito.</p>
                              <blockquote class="adjust2">
                                <p>María Cuadrado</p>
                                <small>Project Manager, Sum | The Sales Intelligence</small> 
                              </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/andoni.jpg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Persona Honesta, gran Compañero. Nunca noté la distancia que había de 400Km entre nosotros. Él hace equipo, además de tener unos conocimientos muy avanzados en el mundo de la Administración de Sistemas.</p>
                              <blockquote class="adjust2">
                                <p>Andoni Olabarria</p>
                                <small>System Administrator, Leadera (Dominion)</small> 
						    </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/casandra.jpeg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Durante mi experiencia laboral en SUM estuve encantada de formar parte de su equipo. Objetivos claros, sinceridad, trabajo en equipo y sobre todo muy buen rollo. </p>
                              <blockquote class="adjust2">
                                <p>Casandra López</p>
                                <small>Senior Frontend Developer, Divisa IT (Quirónsalud)</small> 
						    </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="thumbnail adjust1">
                          <div class="col-md-2 col-sm-2 col-xs-12"> <img class="media-object img-rounded img-responsive img-circle" src="img/patricia.jpeg" alt=""> </div>
                          <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="caption">
                              <p>Un crack donde los haya, grande como compañero y grande como persona!!!Gracias por hacernos la vida más fácil a las súper guerreras de Sum Broker siempre que lo necesitamos, por ser tan cercano, tan generoso, tan honesto y por estar siempre que te necesitamos.</p>
                              <blockquote class="adjust2">
                                <p>Patricia Davilla</p>
                                <small>Insurance Advisor, Sum Broker at Nervo Group</small> 
						    </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
                
                 </div>
            </div>

    </section>
   <!-- End Testimonial section -->
   
   <!-- Start Contact section -->
   <section class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 rzm_contact" id="contact">
   		<h1 class="title">Contacto</h1>
      <!-- Start Contact Form -->
<form id="contact-form" method="post" action="contact-form.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Nombre *" required="required" data-error="Nombre Requerido.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Apellidos *" required="required" data-error="Apellidos Requeridos.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                  <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Un Email válido es Requerido.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Teléfono">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                          
                              
                          
                            <div class="row">
                                <div class="col-md-12 col-xs-12 input-group rzm_msz_box">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" style="resize: none;"placeholder="Escríbeme tu mensaje! Si sólo quieres decir “Hola”, Estaré encantado de recibirlo." rows="6" required="required" data-error="Por favor, deje su mensaje."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12 input-group">
                                    <div class="form-group">
                                        <input id="answer" name="answer" type="text" class="form-control" placeholder="<?php echo $math; ?> = " required="required" data-error="Resultado de la Operación."/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send main-btn center-block" value="Enviar Mensaje">
                                </div>
                            </div>
                        </div>

                    </form>   
<!-- End Contact Form -->
   </section>
   <!-- End Contact section -->
  
 </div>
 </div><!-- End Main Container-->
 </div> <!-- End Outside Main-->
 
  <!-- Start footer section -->
   		<section class="col-md-12 col-sm-12 col-xs-12 rzm_footer container-fluid">
        	<div class="container">
                <h4>Encuéntrame en</h4>
                <div class="rez_footer_social">
                    <a href="https://www.linkedin.com/in/victor-manuel-recio/" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <!--
                       <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                   -->
                </div>
                <p>©<script>document.write(anionow);</script>  Esta web es de mi propiedad, Por favor no la uses sin mi permiso.</p>
            </div>
        </section>
   <!-- End footer section -->
<!-- JS
	================================================== --> 

<script src="javascripts/jquery.tipsy.js"></script> 

<script src="javascripts/jquery.scrollTo-min.js" ></script> 
<script src="javascripts/jquery.localscroll-min.js" ></script> 
<script  src="javascripts/jquery.easing.1.3.js"></script> 
<script src="javascripts/script.js"></script> 

<!--contact form script starts-->
<script src="contact.js"></script> 
<script src="javascripts/jquery.validate.js" type="text/javascript"></script>

<!-- End Document
================================================== -->
</body>


</html>