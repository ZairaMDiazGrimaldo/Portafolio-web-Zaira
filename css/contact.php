<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>YIW Minimal | A clean &amp; professional free template</title>
 
    <meta name="author" content="Sara [mascaradesign.it] for Your Inspiration Web [yourinspirationweb.com]" />
    <meta name="keywords" content=""
    />
 	<meta name="description" content=""
	/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <!-- [template css] begin -->
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="css/960.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" /> 
    <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!-- [template css] end -->
    
    <!-- [template css javascript] begin -->
    <link rel="stylesheet" href="css/project.css" type="text/css" media="screen, projection" />
    <!-- [template css javascript] end -->
	
	<!-- [JS] begin -->
    <script  type="text/javascript" src="js/jquery-1.3.1.min.js"></script> 
    <script  type="text/javascript" src="js/scripts.js"></script>
    <script  type="text/javascript" src="js/coda-slider.1.1.1.js"></script>
    <script  type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
    <script  type="text/javascript" src="js/jquery-easing.1.2.pack.js"></script>
    <!-- [JS] end -->
  
</head>

<body class="body">

	<!-- START TOP SECTION -->
	<div class="container_12">
	
		<!-- START LOGO -->
		<div class="grid_4 header"><img src="images/logo.jpg" width="230" height="99" alt="logo" /></div>
		<!-- END LOGO -->
   	 
		<!-- START NAVIGATION -->
   	  	<div class="grid_8 header">
   	  		<div id="navigation">
				<ul id="nav">
					<li id="home"><a href="index.htm" title="Home page">Home</a></li>
					<li id="about"><a href="about.htm" title="About">About</a></li>
					<li id="portfolio"><a href="portfolio.htm" title="Portfolio">Portfolio</a></li>
					<li id="contact"><a href="portfolio.htm" title="Contact" class="currentPage">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- END NAVIGATION -->
		
		<div class="clear"></div>
	</div>
	<!-- END TOP SECTION -->
   
	<!-- START MEDIUM SECTION -->
	<div class="container_12 medium">
	
		<!-- START GET IN TOUCH TEXT -->
   		<div class="grid_6">
	   		<div class="getTouch">
	   			<h2>Ponte en contacto conmigo.<span class="orange"></span></h2>
	   			<p>Ten la confianza de comunicarte, escuchare lo que necesitas, te dar&eacute; un presupuesto y soluciones para que pueda crecer tu proyecto	y/o tu negocio.</p>
	   			<p>Puedes visitarme en mi negocio, ponerte en contacto conmigo a tr&aacute;ves de mis redes sociales.</p>
	   		</div>
   		</div>
   		<!-- END GET IN TOUCH TEXT -->
   	
   		<!-- START MASCOTTE -->
	   	<div class="grid_6 mascotte">
	   	  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240628.1948769612!2d-99.3277827310244!3d19.54953110860693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21e16742f5f9f%3A0x689a153239725bf1!2sUniversidad%20Mexicana%20-%20UNIMEX%20Plantel%20Izcalli!5e0!3m2!1ses-419!2smx!4v1657174764488!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
	   	</div>
	   	<!-- END MASCOTTE -->
   	  
		<div class="clear"></div>
		
	</div>
	<!-- END MEDIUM SECTION -->
 
	<!-- START BOTTOM SECTION -->
	<div class="container_12">
	
		<!-- START CONTACT FORM -->
		<div class="grid_6">
			<div class="contactForm">
	   			<h2>Send me a <span class="orange">message</span></h2>
	   			
	   			<?php echo (($form_submitted) ? $responseMarkup : ''); ?>
					
				<form id="contactForm" action="" method="post">					
					<div class="formContent">
						<label for="name">Your name<span class="name">required*</span></label>					
						<input type="text" name="name" id="name" class="input required" value="" />			
						<label for="email">Your email.<span class="email">required*</span></label>
						<input type="text" name="email" id="email" class="input required" value="" />
												
						<fieldset>	
							<label class="optional">Your phone</label>
							<input type="text" name="phone" id="phone" class="input" value="" />					
						</fieldset>					
				
						<textarea class="textarea" name="message" rows="10" cols="10"></textarea>
						<input type="hidden" name="contact_form" value="1" />
						<input type="submit" class="submit" value="send message" />									
					</div>
				</form>				
	   		</div>
		</div>
		<!-- END CONTACT FORM -->
	   	
		<!-- START CONTACT -->
	   	<div class="grid_6">
	   		<div class="skype">
	   			<h2>You can <span class="orange">contact me</span> also by:</h2>
	   			<a href="#"><img src="images/contact/contact.gif" alt="Call me or contact me on skype" /></a>	
	   		</div>
	   		
	   		<!-- START SOCIAL -->
	   		<div id="social">
		   		<a href="#"><img src="images/icons/delicious.png" alt="My delicious account" /></a>	
	   			<a href="#"><img src="images/icons/linkedin.png" alt="My flickr account" /></a>
	   			<a href="#"><img src="images/icons/facebook.png" alt="My facebook account" /></a>
	   			<a href="#"><img src="images/icons/twitter.png" alt="My twitter account" /></a>
	   			<a href="#"><img src="images/icons/feed.png" alt="My feed" /></a>
   			</div>	
   			<!-- END SOCIAL -->
   			
	   	</div>
	   	<!-- END CONTACT -->
	   	
	   	<div class="clear"></div>
	</div>
	<!-- END BOTTOM SECTION -->
	
   	<div class="clear"></div>
   	
	<!-- START FOOTER -->
   	<div class="container_12">
	   	<p class="footer">
	   		Copyright 2009 by <strong>Your Inspiration Web</strong> <br/>
	   		YIWMinimal - clean &amp; cool portfolio template - download it for free!
		</p>
	</div>
	<!-- END FOOTER -->
	
<!-- contact form validation -->
<script type="text/javascript">	
  $(document).ready(function(){	
    $("#contactForm").validate({
		errorClass: "inputError",
		messages: {
			name: {
				required: ""				
			},
			email: {
				required: ""				
			}
		}
	})
  });
</script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

</body>
</html>