<?php
	include('do/nav.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zachary Zimmerman</title>
	<link rel="stylesheet" href="styles.css" type="text/css">
    <script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-6331853-2']);
	  _gaq.push(['_setDomainName', '.zachzimm.com']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</head>
<body>

	<div class="container">
    	<div id="header">
        	<div class="topSpaceHolder">
            	&nbsp;
            </div>
<?php
			printNav(1);
?>
            <div class="navSpaceHolder">
            
            </div>
        </div>
        <div id="content">
        	<div id="photo" class="floatLeft">
            	<img src="images/zach.png" alt="Zachary Zimmerman"/>
            </div>
            <div id="contentLeft" class="floatLeft">
            	<h1 class="greeting">Hi.</h1>
                <hr />
                <p class="frontGreeting">I'm Zach Zimmerman, and this is my personal webpage.<br/>
                Here I place examples of some of my work along with my academic
                and professional experience. If you'd like to contact me about
                any of this, feel free to do so at the e-mail address listed on
				my <a href="resume.php">Resume</a> or <a href="vitae.php">Vitae</a>.
                </p>
            </div>
        </div>
        <div class="rightShadow">
        	<!-- Empty DIV for right drop shadow -->
        </div>
        <div id="footer">
        	<div class="bottomShadow">
            	<!-- Empty DIV for bottom drop shadow -->
               	<span>&copy; Copyright 2011 Zachary Zimmerman. All rights reserved. Site design by Zach and Celine Zimmerman</span>
            </div>
            <div id="footerContent">
            </div>
        </div>
    </div>

</body>
</html>
