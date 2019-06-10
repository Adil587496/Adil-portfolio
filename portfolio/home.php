<?php

	include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $lang['title'] ?></title>
<link rel="icon" type="image/png" href="images/myLOGO.png">
<!-- for-mobile-apps -->
<meta http-equiv="content-language" content="en-US" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="resource-type" content="document" />
<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
<meta name="author" content="Adil El ghazzali" />
<meta name="contact" content="norge.and.nederland@gmail.com" />
<meta name="keywords" content="Look at,Get the Best,maroc,portfolio,Adil El ghazzali, Flask, Python, projects, tensorFlow, Android, 
Back-end, developer, webdesigns" />
<meta name="description" content="I am passionate about designing and developing user-friendly websites. I have all the skills to create a new high-quality website or improve existing websites for individuals and organizations, using the latest techniques and trends." />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
  <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/navbar.css"> <!-- navbar style -->
	<link rel="stylesheet" href="css/search.css"> <!-- search style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->


	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
	
</head>



<body>



<!-- lang -->
				<?php
				$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"; 
				$name = "English";
				if (isset($_GET['lang'])){
					if($_GET['lang'] == 'fr'){
						$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png";
						$name  = "Français";
					}	
					else if($_GET['lang'] == 'es'){
						$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Spain.png";
						$name  = "Español";
					}	else if($_GET['lang'] == 'sw'){
						$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Sweden.png";
						$name  = "Sweden";
					}
				}
				?>
<div class="switch-lang"> 
  <li class="current-lang"><img class="lang-flag" src="<?= $flag?>"/>
    <a class="lang-text" href="home.php?lang=en"><?=$name?></a>
  </li>
  <div class="lang-dropdown">
    <li class="selecting-lang current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Spain.png"/>
      <a class="lang-text" href="home.php?lang=es">Español</a>
    </li>
    <li class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png"/>
      <a class="lang-text" href="home.php?lang=fr">Français</a>
    </li>
    <li class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Sweden.png"/>
      <a class="lang-text" href="home.php?lang=sw">Sweden </a>
		</li>
		<li class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
    <a class="lang-text" href="home.php?lang=en">English</a>
  </li>
  </div>
</div>

	
<!-- end lang -->

		<header>
				<!-- Navbar  -->
				<nav class="cd-stretchy-nav">
				 <a class="cd-nav-trigger" href="#0">
					 <span aria-hidden="true"></span>
				 </a>
		 
				 <ul>
					 <li><a href="home.php" class="active"><span><?php echo $lang['hoo'] ?></span></a></li>
					 <li><a href="#about"><span><?php echo $lang['abb'] ?></span></a></li>
					 <li><a href="#services"><span><?php echo $lang['serr'] ?></span></a></li>
					 <li><a href="#portfolio"><span><?php echo $lang['porr'] ?></span></a></li>
					 <li><a href="#contact"><span><?php echo $lang['ctt'] ?></span></a></li>
				 </ul>
		 
				 <span aria-hidden="true" class="stretchy-nav-bg"></span>
				</nav>

		 </header>
<!-- end navbar -->



<!-- banner -->
<div id="home" class="banner-w3pvt d-flex">
	
	<div class="container">
						


		<div class="row">
			<div class="col-lg-7 bnr-txt-w3pvt">
				<div class="bnr-w3pvt-txt mt-sm-5">
	
				<p> <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>



					<h6><?php echo $lang['welcoming'] ?></h6>
					<h2><?php echo $lang['Hello'] ?> <span><?php echo $lang['Adil'] ?> <br>EL GHAZZALI</span></h2>
					<h4 class="ml7" id="typing">
							<span class="text-wrapper">
									<span class="letters"><?php echo $lang['dev'] ?></span>
								</span>
						</h4>
					<p class="mt-4" > <?php echo $lang['dv'] ?></p>
					<ul class="social_section_1info mt-4">
							
						<li class="mb-2 facebook"><a href="https://www.facebook.com/nicolas.stlouis.96"target="_blank"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mb-2 github"><a href="https://github.com/Adil587496"target="_blank"><span class="fab fa-github"></span></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/in/adil-el-ghazzali-b69453169/"target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
						<li class="Instagram"><a href="https://www.instagram.com/nicolas.st.louis/"target="_blank"><span class="fab fa-instagram"></span></a></li>
						<li class="Patreon"><a href="https://www.patreon.com/adil_da_geek"target="_blank"><span class="fab fa-patreon"></span></a></li>
						<li class="Youtube"><a href="https://www.youtube.com/channel/UCjfXXVwvOKscb9i4K5uNo6Q"target="_blank"><span class="fab fa-youtube"></span></a></li>
					</ul>
					<a href="#about" class="scroll bnr-btn mr-2"><?php echo $lang['rea'] ?> </a>
					<a href="#contact" class="scroll bnr-btn1"><?php echo $lang['con'] ?> </a>
		
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end banner -->
	 
	
<!-- about -->
<section class="about" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 p-0">
				<img src="images/about1.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-6">
				<div class="about-right">
					<h4 class="main"><?php echo $lang['hey'] ?> <s><?php echo $lang['all'] ?></s> <?php echo $lang['ok'] ?></h4>
					<p><?php echo $lang['soft'] ?></p>
					<div class="row mt-sm-5 mt-4 about-right-inner">
						<div class="col-sm-4 col-6 myphoto-sign text-center">
							<img src="images/me.jpg" alt="" class="img-fluid rounded-circle"/>
							<img src="images/signature.png" alt="" class="img-fluid mt-3"/>
							<a href="#contact" class="scroll abt-btn"><?php echo $lang['hire'] ?> </a>
						</div>
						<div class="col-sm-7 offset-lg-1">
							<h4><?php echo $lang['per'] ?></h4>
							<p><?php echo $lang['hel'] ?> <strong><?php echo $lang['ad'] ?></strong>. <?php echo $lang['yea'] ?> <strong><?php echo $lang['web'] ?></strong></p>
							<h4 class="mt-4"><?php echo $lang['sk'] ?></h4>
							<div class="progress-one mt-3">
								<h4 class="progress-tittle"><?php echo $lang['wd'] ?></h4>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress-one my-lg-3">
								<h4 class="progress-tittle"><?php echo $lang['dv'] ?></h4>
								<div class="progress">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress-one">
								<h4 class="progress-tittle"><?php echo $lang['apd'] ?></h4>
								<div class="progress">
									<div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3 class="position"><?php echo $lang['abm'] ?></h3>
		</div>
    </div>
</section>
<!-- end about -->

<!-- services-->
<section class="services pt-5" id="services">
	<div class="services-section">
		<div class="inner-width">
			<h1 class="section-title"><?php echo $lang['ms'] ?></h1>
			<div class="border"></div>
			<div class="services-container">

				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-paint-brush"></i>
					</div>
					<div class="service-title"><?php echo $lang['pd'] ?></div>
					<div class="service-desc">
					<?php echo $lang['gc'] ?>
					</div>
				</div>

				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-code"></i>
					</div>
					<div class="service-title"><?php echo $lang['wed'] ?></div>
					<div class="service-desc">
					<?php echo $lang['prov'] ?>
					</div>
				</div>

				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-mobile-alt"></i>
					</div>
					<div class="service-title"><?php echo $lang['mbdev'] ?></div>
					<div class="service-desc">
					<?php echo $lang['smart'] ?>
					</div>
				</div>

				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-brain"></i>
					</div>
					<div class="service-title"><?php echo $lang['machine'] ?></div>
					<div class="service-desc">
					<?php echo $lang['dont'] ?>
					</div>
				</div>

				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-database"></i>
					</div>
					<div class="service-title"><?php echo $lang['data'] ?></div>
					<div class="service-desc">
					<?php echo $lang['like'] ?>
					</div>
				</div>

				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-undo-alt"></i>
					</div>
					<div class="service-title"><?php echo $lang['webrest'] ?></div>
					<div class="service-desc">
					<?php echo $lang['is'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end services -->






<!-- portfolio -->

 <section class="portfolio py-5" id="portfolio">
	<div class="container py-lg-5">
		<p class="paragraph"><?php echo $lang['my'] ?></p>
		<h3 class="heading mb-sm-5 mb-4"><?php echo $lang['folio'] ?></h3>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p1.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">Vegan Donut</h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/atelier-css-Vegan-Donut-Shope-"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p2.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title"><?php echo $lang['calc'] ?></h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/Calculator-js"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p3.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title"><?php echo $lang['coun'] ?></h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/counter"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p4.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">Slack clone</h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/slack_clone"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p5.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title"><?php echo $lang['clock'] ?></h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/clock"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p6.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">Ojet chart</h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/OracleJET-Visualization"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p7.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title"><?php echo $lang['face'] ?></h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/face-recognizer"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-6 p-0">
				<div class="box9">
					<img src="images/p8.jpg" alt="portfolio" class="img-fluid" />
					<div class="box-content">
						<h3 class="title">Snallygaster</h3>
						<ul class="icon">
							
							<li><a href="https://github.com/Adil587496/snallygaster"target="_blank"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //portfolio -->
<!-- quote -->
<section class="quote py-5">
		<div class="container py-lg-5">
			<div class="row">
				<div class="col-lg-8">
					<h4>" <?php echo $lang['quote'] ?>"</h4>
					<h5><?php echo $lang['ddf'] ?></h5>
					<img src="images/signature.png" alt="" class="img-fluid"/>
				</div>
			</div>
		</div>
	</section>
	<!-- //quote -->



<!-- Contact -->

<section class="contact py-5" id="contact">
	<div class="container py-lg-5">
		<p class="paragraph"><?php echo $lang['get'] ?></p>
		<h3 class="heading mb-sm-5 mb-4"><?php echo $lang['ctct'] ?></h3>
		<div class="contact-form">
			<div class="row">
				<div class="col-lg-8">
					<form name="contactform" id="contactform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
						<div class="row">
							<div class="form-group col-md-6 ">
							  <label><?php echo $lang['nm'] ?></label>
							  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
							</div>
							<div class="form-group col-md-6">
							  <label><?php echo $lang['email'] ?></label>
							  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group col-md-6">
							  <label><?php echo $lang['phn'] ?></label>
							  <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
							</div>
							<div class="form-group col-md-6">
							  <label><?php echo $lang['sbj'] ?></label>
							  <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
							</div>
							<div class="form-group col-12">
							  <label><?php echo $lang['message'] ?></label>
							  <textarea name="message" class="form-control" id="iq" placeholder="Enter Your Message Here"></textarea>
							</div>				
							<button name="submit" type="submit" value="submit" class="btn btn-default"><?php echo $lang['sub'] ?></button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</section>
<!-- //Contact -->		
		
<!-- footer -->
<footer class="py-lg-5 py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<h3 class="wthree-logo mt-3 mx-auto">
					<a href="https://drive.google.com/open?id=1aEWWy_Ml8gZknyMkUrA28zA41yDx4HLF"target="_blank"  id="logoLink1"><span class="fas fa-file-download "></span> </a>
					<div class="service-desc text-light">CV</div>
				</h3>
			</div>
			<div class="col-lg-7 my-lg-0 my-4">
				<p><span class="fa mr-2 fa-map-marker"></span>Qu Saada N 29, Youssoufia, Mk 46300 <?php echo $lang['moro'] ?></p>
				<p class="mt-2"><span class="fa mr-2 fa-envelope"></span><a href="mailto:elghazzaliadil0@gmail.com">elghazzaliadil0@gmail.com</a>, <span class="fa ml-3 mr-2 fa-phone"></span>+212 6 19 50 94 01</p>
			</div>
			<div class="col-lg-3 copy-right p-0 text-lg-right">
			
				<p><?php echo $lang['fol'] ?></p>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="https://www.facebook.com/nicolas.stlouis.96"target="_blank"><span class="fab fa-facebook"></span></a></li>
					<li class="linkedin"><a href="https://www.linkedin.com/in/adil-el-ghazzali-b69453169/"target="_blank"><span class="fab fa-linkedin"></span></a></li>
					<li class="github"><a href="https://github.com/Adil587496"target="_blank"><span class="fab fa-github"></span></a></li>
					<li class="Instagram"><a href="https://www.instagram.com/nicolas.st.louis/"target="_blank"><span class="fab fa-instagram"></span></a></li>
					<li class="Patreon"><a href="https://www.patreon.com/adil_da_geek"target="_blank"><span class="fab fa-patreon"></span></a></li>
					<li class="Youtube"><a href="https://www.youtube.com/channel/UCjfXXVwvOKscb9i4K5uNo6Q"target="_blank"><span class="fab fa-youtube"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->



<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->
<!-- script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/effect.js"></script>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/counterup/jquery.waypoints.min.js"></script>
<script src="lib/counterup/jquery.counterup.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="js/bg.js"></script>	
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script>

</body>
</html>