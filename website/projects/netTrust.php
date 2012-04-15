<?php
	include('../do/nav.php');
	$PROJECT_NAME = 'Net Trust';
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
						<h3>Overview</h3>
						<table class="projectOverview">
							<tr>
								<th>When</th>
								<td>May 2008 - May 2010</td>
							</tr>
							<tr>
								<th>Technologies</th>
								<td>Javascript, XPCOM, XUL, XML</td>
							</tr>
							<tr>
								<th>Project Site</th>
								<td><a href="http://www.ljean.com/NetTrust/">Net Trust</a></td>
							</tr>
							<tr>
								<th>Source</th>
								<td><a href="http://code.google.com/p/nettrust/source/browse/">Google Code - Net Trust</a></td>
							</tr>
							<tr>
								<th>License</th>
								<td>Apache 2.0</td>
							</tr>
						</table>
					</div>
					<div class="overviewRight">
						<a href="../images/netTrustBig.jpg" rel="lightbox" title="Net Trust in action"><img src="../images/netTrustSmall.png" alt="Screenshot of Net Trust in action"/></a>
					</div>
				</div>
                <div id="education" class="resumeSection">
	                <h3>Description</h3>
                    <hr />
                    <p>Net Trust is an open-source anti-phishing toolbar developed by a team at Indiana University. Net Trust serves as a reputation system 
					for websites based on the user's social network's browsing histories. Through the toolbar the user can get an idea about whether or not a 
					website is trustworthy based on how many times his or her friends visisted the website, along with other information from third-party sources
					such as McAfee SiteAdvisor.</p>
					<p>During my undergraduate studies I was chosen by <a href="http://www.ljean.com">Professor L. Jean Camp</a>, the director of the Security Informatics Program at Indiana University,
					to have the opportunity of contributing to this open source project as part of a funded research assistantship made possible by Google and the National Science Foundation. My main contribution 
					was the design, maintenance, and development of an alternative interface called <a href="ambientTrust.php">Ambient Trust</a>, which was the subject of a study and a published workshop paper.</p>
					<p>Most of my contributions on this project consisted of:</p>
					<ul>
						<li>Designing and developing a hardware interface to the toolbar (see <a href="ambientTrust.php">Ambient Trust</a>)</li>
						<li>Updating compatibility for new versions of Firefox</li>
						<li>Interfacing the toolbar with a third party reputation source</li>
					</ul>
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
