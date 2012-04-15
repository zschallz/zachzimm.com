<?php
	include('do/nav.php');
?>


<?php
	/* Main -- determine which view to display based on $_GET variables. */
	if( isset($_GET['view']) 
		&& $_GET['view'] == 'print' )
	{
		renderPrintView();
	}
	else
	{
		renderNormalView(); 
	}
?>


<?php
/* renderNormalView()
 * The HTML with PHP calls goes here to print the view that visitors to the site see by default.
 */
?>
<?php
	function renderNormalView()
	{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Zachary Zimmerman</title>
		<link rel="stylesheet" href="styles.css" type="text/css">
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
				printNav(2);
	?>
				<div class="navSpaceHolder">
				
				</div>
			</div>
			<?php printContent(true); ?>
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
<?php 
	}
?>

<?php
/* renderNormalView()
 * The HTML with PHP calls goes here to print the view that visitors to the site see by default.
 */
?>
<?php
	function renderPrintView()
	{
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
	<body style="background-image:none;">
	
		<div class="container">
			<?php printContent(false); ?>
		</div>
	
	</body>
	</html>
<?php 
	}
?>

<?php
/* printContent()
 * All HTML in the content DIV goes here. This allows for easy generation of different views.
 * (such as the normal view and the printing view)
 */
?>

<?php
	function printContent($boolPrintCaptcha)
	{ ?>
		<div id="content">
		
			<div id="resume">
				<p id="contactInfo">
					<?php
						if($boolPrintCaptcha)
						{ ?>
							<input type="button" onClick="showContactCaptcha()" value="Show contact info" />
							<div id="contactCaptcha" title="Please confirm your humanity.">
							<form id="contactCaptchaForm" onSubmit="postCaptchaAnswer(); return false;">
								<div class="contactCaptchaFormContent">
									<label for="captchaAnswer">What is my last name? (Look above): </label><input type="text" name="captchaAnswer" class="text ui-widget-content ui-corner-all" />
									<input type="button" value="Submit"  onClick="postCaptchaAnswer()"/>
								</div>
							</form>
							</div>
					<?php
						}
						else
						{
							include('contactCaptcha.php');
							printContactInfo();
						}
					?>
						
				</p>
				<div id="objective" class="resumeSection">
					<h2>Objective</h2>
					<hr />
					<p>
						Seeking a development-related position utilizing proven skills in leadership, team-oriented development and testing, human-centered design, and research.
					</p>
				</div>
				<div id="education" class="resumeSection">
					<h2>Education</h2>
					<hr />
					<h3>B.S. Informatics, Indiana University Bloomington 08/2004-12/2009</h3>
					<ul>
						<li><b>Major</b>: Informatics <b>Minors</b>: Information Systems Security, Japanese
							<ul>
								<li>Major GPA: 3.397</li>
							</ul>
						</li>
						<li>School of Informatics Dean’s List Awardee, Spring 2009</li>
						<li>Completed courses involving Human-centered Design, Development, Protocol Design, and Cryptography.</li>
						<li><b>Senior thesis</b>: Designed and developed an anti-phishing computer peripheral that displayed reputation ratings of websites users visit; conducted research study to evaluate effectiveness.
						<ul>
						  <li>Utilized skills in C, and self-taught skills in Arduino, XUL, PHP, and relational databases.</li>
						</ul>
						</li>
					</ul>   
				</div>
				<div id="experience" class="resumeSection">
					<h2>Experience</h2>
					<hr />
					<div class="experienceItem">
						<h3><a href="http://www.oracle.com/">Oracle Corporation</a></h3>
						<h4>Associate Consultant, (RICE Developer, Java Developer) 08/10-Present</h4>
						<ul>
							<li>Assists in implementing Oracle Technologies for Oracle's Goverment, Education, and Healthcare clients.</li>
							<li>Worked in various software shops under various management methodologies to deliver quality software for clients</li>
							<li>Works with technologies such as Oracle E-Business Suite, Oracle SOA Suite, Oracle DB 11g, PL/SQL, SQL.</li>
							<li>Worked on projects using XHTML, CSS, and JQuery at an enterprise level.</li>
							<li>Developed ADF-based JAX-WS Java Web Services and Quartz Scheduler Jobs</li>
							<li>Wrote client-accepted technical design documentation for AIM and OUM frameworks such as MD070.</li>
							<li>Developed PL/SQL wrappers to EBS R12 Accounts Recievables APIs for exposing via Web Services</li>
							<li>Solved defects caused by system upgrades with custom E-business Suite PL/SQL code.</li>
							<li>Unit tests solutions developed for clients functionally and technically.</li>
							<li>OCA Certified PL/SQL Developer</li>
						</ul>
					</div>
					<div class="experienceItem">
						<h3><a href="http://informatics.indiana.edu/">Indiana University School of Informatics</a>, Bloomington, Indiana</h3>
						<h4>Research Assistant: Project Manager, 05/2008-08/2010</h4>
					  <h4>Acting Laboratory Manager (Intern), 06/2008-08/2008 &amp; 05/2009-08/2009</h4>
						<ul>
							<li>Developed on and managed five different projects focused on developing high quality prototypes to serve as devices in a smart home.
								<ul>
									<li>Helped manage five part-time student developers utilizing <i>Agile Software Development</i> methodology.</li>
								</ul>
							</li>
							<li>Designed and coded innovative devices (mostly embedded systems) for use in a National Science Foundation funded research project.
								<ul>
									<li>Self-taught ASP .NET, C# .NET, C, and PHP for use in project.</li>
								</ul>
							</li>
							<li>Designed Relational Database Schemas powered by MS SQL Server for use in a large-scale research study at Indiana University. </li>
						</ul>   
					 </div>
					 <div class="experienceItem">
						<h3><a href="http://uits.iu.edu/">Indiana University Information Technology Service</a>, Bloomington, Indiana</h3>
						<h4>Student Consultant, 02/2008-08/2008</h4>
						<ul>
							<li>Worked as a team to assist hundreds of students, staff, and faculty with technical problems with University computers and printers while providing great customer service.</li>
							<li>Recipient of Consultant of the Month award after first month of hire.</li>
						</ul>   
					 </div>
				</div>
				<div id="skills" class="resumeSection">
					<h2>Technical Skills</h2>
					<hr />
					<table>
						<tr>
							<td class="category">Application Development:</td>
							<td>C# .NET, Java, C</td>
						</tr>
						<tr>
							<td class="category">Web Development:</td>
							<td>PHP, ASP .NET (C#), XHTML, JavaScript, AJAX, JQuery</td>
						</tr>
						<tr>
							<td class="category">Data Management:</td>
							<td>Oracle 11g, MySQL, MIcrosoft SQL Server, XML, XPath</td>
						</tr>
						<tr>
							<td class="category">Data Manipulation:</td>
							<td>PL/SQL, T-SQL, Standard SQL</td>
						</tr>
						<tr>
							<td class="category">Business Techologies:</td>
							<td>Oracle E-Business Suite, Oracle SOA Suite</td>   
						</tr>
						<!--<tr>
							<td>Certifications:</td>
							<td>Coming soon: Oracle Certified Associate</td>
						</tr>-->
					</table>
				</div>
			 </div>
		</div>	
<?php	}
?>