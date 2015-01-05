<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<?php
//@author Chris Darby (cmd08)
//@created_on 29/01/12
	if (isset($_GET["page"])){
		$page = $_GET["page"];
		if($page == "") $page = "home";
	}else{
		$page = "home";
	}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>New Financial Worlds Conference</title>
	<meta name="description" content="November 30th 2013 New Financial Worlds Conference">
	<meta name="author" content="">

	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="css_2013/style.css">
	<link rel="stylesheet" type="text/css" href="./jquery.ad-gallery.1.2.4/jquery.ad-gallery.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="js_/libs/modernizr-2.0.6.min.js"></script>
	</head>
<body>

<div id="container">
	<header>
	</header>
	<div id="main" role="main">
		<a href="./"><img id="logo" src="./img_/logo2.png" alt="New Financial Worlds Derivatives logo" /></a>
	<nav>
		<a href="./register" <?php if($page=="register"||$page=="student"||$page=="professional"){echo "class=\"selected\"";}?>>Register</a>
		<a href="./about" <?php if($page=="about"){echo "class=\"selected\"";}?>>About Us</a>
		<a href="./speakers" <?php if($page=="speakers"){echo "class=\"selected\"";}?>>Key Speakers</a>
		<a href="./agenda" <?php if($page=="agenda"){echo "class=\"selected\"";}?>>Agenda</a>
		<a href="./venue" <?php if($page=="venue"){echo "class=\"selected\"";}?>>Venue</a>
		<a href="./team" <?php if($page=="team"){echo "class=\"selected\"";}?>>Team</a>
		<a href="./gallery" <?php if($page=="gallery"){echo "class=\"selected\"";}?>>2012 Gallery</a>
		<a href="./sponsors" <?php if($page=="sponsors"){echo "class=\"selected\"";}?>>Sponsors</a>
		<a href="./faq" <?php if($page=="faq"){echo "class=\"selected\"";}?>>FAQ</a>
		<a href="./contact" <?php if($page=="contact"){echo "class=\"selected\"";}?>>Contact Us</a>
	</nav>
	<div id="content">
		<?php

			include("./pages2013/".$page.".php");
		?>
	</div>
	</div>
	
	<footer>
		<a href="./sponsors"><img src="./img_2013/sponsors bottom ww.png" width=1000px valign=middle alt="sponsor logos" /></a>

<p class="trebuchet"><a href=http://www.facebook.com/NFWConference><img src=img_2013/fb.png width=40px border=0></a>
<BR>
<a href=http://www.financesociety.co.uk><img src=http://union.ic.ac.uk/scc/finance/icfinancialconference/images/ICFS.png border=0 width=250px valign=middle></a>
	

</p>
		<p class="trebuchet">Copyright 2013 New Financial Worlds Conference. All rights reserved.</p>

	</footer>
</div> <!--! end of #container -->

<!-- scripts concatenated and minified via ant build script-->
<script src="js_/plugins.js"></script>
<script src="js_/script.js"></script>
<script src="js_/libs/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js_/libs/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<!-- end scripts-->


<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->


  <script type="text/javascript" src="./jquery.ad-gallery.1.2.4/jquery.ad-gallery.js"></script>
  <script type="text/javascript">
  $(function() {
    var galleries = $('.ad-gallery').adGallery();
    
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>

</body>
</html>
