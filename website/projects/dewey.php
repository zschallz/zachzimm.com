<?php
	include('../do/nav.php');
	$PROJECT_NAME = 'Dewey';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Zachary Zimmerman - <?php echo($PROJECT_NAME); ?></title>
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
	                <h2><?php echo($PROJECT_NAME); ?></h2>
                    <hr />
                    <div class="overviewContainer">
						<div class="overviewLeft">
							<table class="projectOverview">
								<tr>
									<th>When</th>
									<td>May 2010-Aug 2010</td>
								</tr>
								<tr>
									<th>Technologies</th>
									<td>Arduino, C, PHP, MySQL</td>
								</tr>
								<tr>
									<th>Project Page</th>
									<td>None</td>
								</tr>
								<tr>
									<th>Source</th>
									<td><a href="http://code.google.com/p/deweybot/source/browse/">Google Code - Deweybot</a></td>
								</tr>
								<tr>
									<th>License</th>
									<td>Apache 2.0</td>
								</tr>
							</table>
						</div>
					<div class="overviewRight">
						<img src="../images/dewey.gif" alt="Screenshot of Net Trust in action"/>
					</div>
				</div>
                </div>
                <div id="education" class="resumeSection">
	                <h3>Description</h3>
                    <hr />
                    <p>During my (unfinished) Graduate studies I was chosen by <a href="">Professor Selma Šabanovic</a> to participate in a research project
                    inspired by a class project I took titled "Human-Robot Interaction." I was chosen to participate in this project as the team's developer
                    due to my experience in designing and developing physical prototypes using the Arduino microcontroller as a platform.</p>
                    <p>This research project aimed to determine whether or not certain kinds of robots using certain Human-Robot Interaction design concepts (such as embodiment)
                    could increase the amount of stress-reducing breaks office workers took per day. This project was both interesting and challenging because there were no
                    tried-and-true methods published and documented for detecting the presence of a person at his or her desk.</p>
                    <p>During this project, my main contributions were:</p>
                    <ul>
                    	<li>Designed and Constructed (chose and procured parts, soldered, glued, duct taped) the hardware for a fully-functional, network-connected presence sensing and logging (detected whether a participant was at his or her desk or not)</li>
                    	<li>Designed a backend using PHP and MySQL that the presence sensing platform connected to to log presence data for the study</li>
                    	<li>Designed and developed algorithms that analyzed the data collected from participants to judge when users were at their desk based on motion and temperature values collected by the sensing platform</li>
                    	<li>Designed and developed real-time reports accessible by other researchers on project using PHP and the algorithms and data mentioned above</li>
                    </ul>
                    <br/>
                    <br/>
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