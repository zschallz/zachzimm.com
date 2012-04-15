<?php
	include('../do/nav.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zachary Zimmerman</title>
	<link rel="stylesheet" href="../styles.css" type="text/css">
	<script src="js/zachJQuery.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
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
			printNav(3);
?>
            <div class="navSpaceHolder">
            
            </div>
        </div>
        <div id="content">
        
        	<div class="project">
                <div id="objective" class="resumeSection">
	                <h2>Ambient Trust</h2>
                    <hr />
                   	<table class="projectOverview">
						<tr>
							<th>When Contributed</th>
							<td>Jun 2008-Aug 2010</td>
						</tr>
						<tr>
							<th>Technologies Used</th>
							<td>Arduino, C, C# .Net, MS SQL Server, T-SQL</td>
						</tr>
						<tr>
							<th>Project Page</th>
							<td><a href="http://ethos.soic.indiana.edu/projects/ambient-clock">ETHOS - Ambient Clock</a></td>
						</tr>
					</table>
                </div>
                <div id="education" class="resumeSection">
	                <h3>Description</h3>
                    <hr />
                    <p>Lorem ipsum blah blah</p>
                </div>
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