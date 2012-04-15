<?php
	include('../do/nav.php');
	$PROJECT_NAME = 'Fluency';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zachary Zimmerman - <?php echo($PROJECT_NAME); ?></title>
	<link rel="stylesheet" href="../styles.css" type="text/css" />
	<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="../js/prototype.js"></script>
	<script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="../js/lightbox.js"></script>
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
				<h2><?php echo($PROJECT_NAME); ?></h2>
				<hr />
				<div class="overviewContainer">
					<div class="overviewLeft">
                   	<table class="projectOverview">
						<tr>
							<th>When</th>
							<td>March 2010 - May 2010</td>
						</tr>
						<tr>
							<th>Technologies</th>
							<td>Java, Swing, Webstart, Log4J, JUnit</td>
						</tr>
						<tr>
							<th>Project Site</th>
							<td>
								<a href="http://fluency.knownspace.org/">Fluency at Knownspace</a><br/>
							</td>
						</tr>
						<tr>
							<th>Source</th>
							<td><a href="http://code.google.com/p/ambienttrust/">Project Source at Knownspace</a><br/></td>
						</tr>
						<tr>
							<th>License</th>
							<td>Apache 2.0</td>
						</tr>
					</table>
					</div>
					<div class="overviewRight">
						<a href="../images/fluencyScreenShotBig.gif" rel="lightbox" title="Screen Shot of Fluency during May 2010"><img src="../images/fluencyScreenShotSmall.gif" alt="Screenshot of Fluency"/></a>
					</div>
				</div>
                <div id="education" class="resumeSection">
					<h3>Description</h3>
                    <hr />
					<p>During my graduate studies (unfinished) I had the opportunity to participate in an open-source project that 
					aimed to create a multi-platform Java application that non-technical users could use to build functional applications 
					visually. This project is on-going and can be used in its alpha stages. I was chosen to work on this project as part 
					of work for a Masters-level Java Design Patterns course at Indiana University by Professor Gregory Rawlins .  I played 
					a major role in redesigning the User Experience of a key functional component of the application, and also assisted 
					with Technical Implementation.</p>
					<p>I worked on this project as a three-man team for two months with two other Java Developers.
					The main goal of this two-month engagement was to redesign and implement a key component of how 
					a user defines the functionality of an application they are creating. We also redesigned much of
					the look-and-feel of the application, as well as identified and documented critical User Experience 
					flaws of the application.</p>
					<p>The result of my participation during this two-month engagement was numerous code
					and design contributions to the existing open-source application, which can be viewed at
					the repository listed above. To see examples of our team’s work, please see the below videos.</p>
					<h3>Videos</h3>
					
					<br/><br/>
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
