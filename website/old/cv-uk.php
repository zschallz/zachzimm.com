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
						<span>&copy; Copyright <?php echo date("Y"); ?> Zachary Zimmerman. All rights reserved. Site design by Zach and Celine Zimmerman</span>
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
/* renderPrintView()
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
                <div id="education" class="resumeSection">
	                <h2>Education</h2>
                    <hr />
                    <h3>B.S. Informatics, Indiana University Bloomington, 08/2004-12/2009</h3>
                    <ul>
                    	<li><b>Major</b>: Informatics <b>Minors</b>: Information Systems Security, Japanese</li>
                        <li>Completed courses involving Development, Protocol Design, Cryptography, and Human-Centered Design.</li>
                        <li><b>Senior thesis</b>: Designed and developed an anti-phishing computer peripheral that displayed the reputation ratings of websites users visit; conducted research study to evaluate effectiveness.
                        <ul>
                          <li><b>Skills used</b>: C, and self-taught skills in Arduino, XUL, PHP, and relational databases.</li>
                        </ul>
                        </li>
					</ul> 
                </div>
                 <div id="experience" class="resumeSection">
                    <h2>Experience</h2>
                    <hr />
                    <div class="experienceItem">
                        <h3>Associate Consultant</h3>
                        <h4><a href="http://www.oracle.com/">Oracle Corporation</a>, Washington D.C. Metro Area, USA, 08/10-Present</h4>
                        <ul class="engagementEven">
                        	<li><b>EBS System Integration with Web Based Front end.</b> Public Sector. Sep 2011-Present
                        	<p><i>ADF Developer, RICE Developer.<br/> Integrated an E-Business Suite R12 Accounts Receivables and Accounts Payables system with a custom ADF Facelets Frontend built for a large state government pension fund.</i></p>
								<ul>
									<li>Developed JAX-WS Web Services using ADF business components to expose EBS Accounts Receivables APIs</li>
									<li>Developed a Quartz Java Scheduler job to call EBS AR APIs to programmatically create AR Invoices, Receipts, Adjustments, and Credit Applications</li>
									<li>Developed custom PL/SQL code to wrap around AR APIs to handle authentication, errors, and transaction setup for Java calls to create AR transactions</li>
									<li>Served as project's sole Technical Oracle Apps Resource at the time.</li>
                  <li><b>Skills used</b>: Java, ADF, WebLogic, Web Services, PL/SQL, Oracle SQL, E-Business Suite (AR, AP, IBY), SOA Suite (BPEL)</li>
								</ul>
                        	</li>
                        </ul>
                        <ul class="engagementOdd">
                        	<li><b>Large Scale EBS HR 10.7->R12 Upgrade.</b> Federal government, defense.
								<p><i>RICE Developer; upgraded a large, heavily customized E-Business Suite Human Resources 10.7 system to R12. System used to store HR data for 500,000+ employees.</i></p>
								<ul>
									<li>Retrofitted custom Oracle Forms and Oracle Forms Libraries designed for 10.7 to R12.</li>
									<li>Retrofitted custom Oracle EBS Reports designed for 10.7 to R12.</li>
									<li>Retrofitted custom packages' HR API Calls to reflect changes between 10.7 and R12.</li>
									<li>Retrofitted Flexfield Value Sets to reflect changes in validation between 10.7 and R12</li>
									<li>Converted old data to be compatible with changes to HR made between 10.7 and R12.</li>
									<li>Worked with functional consultants to solve defects that arose due to the upgrade process by performing the above duties.</li>
									<li>Assisted in functional and technical unit testing customizations after the upgrade process.</li>
									<li>Solved technical defects that arose during development (CEMLI) and quality assurance testing (QT&amp;E).</li>
                  <li><b>Skills used</b>: PL/SQL, Oracle SQL, Oracle Forms, E-Business Suite (HR, OTA, WebUtil, Basic Oracle Apps Administration)</li>
								</ul>
                        	</li>
                        </ul>
                        <ul class="engagementEven">
                        	<li><b>E-Commerce Shop Development</b> Commercial, Higher Education.
								<p><i>XHTML/CSS/JavaScript Frontend Developer; developed frontend of shop portal.</i></p>
								<ul>
									<li>Converted Photoshop PSD Mockups of an online shop's web design into cross-browser compatible, standards compliant XHTML, CSS, and Javascript.</li>
									<li>Reviewed developed XHTML and CSS for WCAG (accesssibility) compliance.</li>
									<li>Utilized JQuery (MIN and UI) Libraries to drive interactive features on website that the client desired.</li>
									<li>Used Adobe Photoshop to extract web-friendly images from a PSD file provided by a Web Designer.</li>
									<li>Worked with a backend development team to assist integration of the XHTML, CSS, and Javascript developed into the Java web application.</li>
									<li>Worked with and mentored an offshore (India) Junior Frontend Developer.</li>
                  <li><b>Skills used</b>: HTML, CSS, JQuery, Javascript, Photoshop</li>
								</ul>
                        	</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                        <h3>Research Assistant</h3>
                        <h4><a href="http://informatics.indiana.edu/">Indiana University School of Informatics.</a></h4>
						<p><i>Dewey</i></p>
						<ul>
							<li>Chosen by Professor after attending class to participate in paid research work in Human-Robot Interaction (User Experience for Robots)</li>
							<li>Helped <a href="http://code.google.com/p/deweybot/source/browse/trunk/">architect software</a> and hardware of a robot featuring a sensing platform to detect break-taking in an office environment.</li>
							<li>Developed and constructed (including soldering) a prototype of robot using Arduino Microcontrollers along with motion and temperature sensors.</li>
							<li>Used robot in an in-situ study in an Indiana University office to monitor break-taking habits of participants and using data to suggest breaks.</li>        	
							<li>Peer reviewed, extended Abstract paper was published based on results of in-situ study (see above).</li>
              <li><b>Skills used</b>: PHP, C, MySQL, Hardware design and construction (Arduino, soldering, etc)</li>
						</ul> 
                    </div>
                    <div class="experienceItem">
                        <h3>Research Assistant</h3>
                        <h4><a href="http://informatics.indiana.edu/">Indiana University School of Informatics, 01/2010-08/2010</a></h4>
                        <p><i><a href="http://ethos.indiana.edu/">DIMA: Dietary Intake Monitoring Application</a></i></p>
						<ul>
							<li>Ported a .NET Mobile application to Android platform used by dialysis patients to monitor their dietary intake</li>
							<li>Converted existing legacy MS SQL Server Compact database to an Android-friendly SQLite database</li>
							<li>Utilized ZXing Library for Android to scan UPCs of food to link with nutrition information stored in a SQLite database.</li>
							<li>Assisted User Experience designers in testing the .NET applications usability among dialysis patients at a local University hospital.</li>
              <li><b>Skills used</b>: Java, C#, .NET Mobile, Android SDK, SQLite</li>
						</ul>
                    </div>
                    <div class="experienceItem">
                        <h3>Undergraduate Research Assistant</h3>
                        <h4><a href="http://informatics.indiana.edu/">Indiana University School of Informatics, 05/2008-01/2010</a></h4>
                        <p><i>Project: <a href="http://ethos.indiana.edu/">ETHOS: Ethical Technologies in the Homes of Seniors</a></i></p>
						<ul>
							<li>Helped architect and develop system used to collect data from devices used by participants in longitudinal study.</li>
							<li>Lead and managed a small group of student developers who helped develop system and prototypes for study.</li>
							<li>Participated in collecting data from participants using focus groups</li>
							<li>Helped conduct user studies to evaluate ease-of-use and appropriateness of newly developed technologies</li>
							<li>Performed duties of lab manager (primarily procurement) while in the lab manager's absence.</li>
							<li>Developed own prototype (Ambient Trust) and used it to design and conduct published in-situ study</li>
              <li><b>Skills used</b>: C# .Net, ASP .Net, C, Linux Administration, MS SQL, Basic MS SQL Administration, T-SQL, Database Design</li>
						</ul>
                    </div>
                </div>
                <div id="publications" class="resumeSection">
                	<h2>Professional Activity</h2>
                    <hr/>
                    <ul>
   						<li>Peer Reviewed Academic Publications: 
   							<ul>
								<li>Book Chapters: 1</li>
								<li>Journal Papers: 1</li>
								<li>Conference Papers: 1</li>
								<li>Poster Papers: 1</li>
								<li>Workshop Papers: 1</li>
								<li>Extended Abstracts: 3</li>
							</ul>
   						</li>
   					</ul>
   					<p>More information available at <a href="http://zachzimm.co.uk/vitae.php">http://zachzimm.co.uk/vitae.php</a></p>
                </div>
                <div id="honors" class="resumeSection">
                	<h2>Honors, Awards, and Funding</h2>
                    <hr/>
                    <div class="experienceItem">
                    	<h3>Security for Ubiquitous Resources Group Lab, Indiana University, 2010</h3>
                        <h4>Funded Research Assistantship (See DIMA Project above), Masters Student</h4>
                        <ul>
                        	<li>Provided tuition remission and stipend for students selected to engage in Research Activities for the SURG lab at Indiana University Bloomington</li>
                            <li>Funding Award: Tuition Remittance, Stipend</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Security for Ubiquitous Resources Group Lab, Indiana University, 2010</h3>
                        <h4>Funded REU Summer Research Assistantship (See ETHOS Project above), Undergraduate Student</h4>
                        <ul>
                        	<li>Chosen by Professor for opportunity to assist in funded research after attending a class.</li>
                        	<li>Program provided stipend to students selected to participate in National Science Foundation's Research Experience for Undergraduates (REU) program to engage in research activities with a Research Laboratory. Project: ETHOS, Ethical Technologies in the Homes of Seniors.</li>
                        	<li>Was asked by Research Laboratory to return and work on project.</li>
                            <li>Funding Award: Stipend</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Center for Applied Cybersecurity Research, Indiana University, 2010</h3>
                        <h4>Travel Grant</h4>
                        <ul>
                        	<li>Provided funding for travel to CHI conference to present paper.</li>
                            <li>Funding Award: $500</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Ethical Technologies in the Homes of Seniors (ETHOS) Video Contest, Indiana University, 2010</h3>
                        <h4>Video Contest winner, 1st Place</h4>
                        <ul>
                        	<li>Placed first place with team in a video contest organized by the ETHOS (see above) research lab.</li>
                        	<li>Scripted, shot and edited a video using Adobe Premiere to explain how to avoid being Phished by Phishing Attacks to older adults. Video <a href="http://www.youtube.com/watch?v=GGOo6lm6KZ8">available</a> on Youtube</li>
                            <li>Award: $1000</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>School of Informatics Dean's List, Indiana University, 2009</h3>
                        <ul>
                        	<li>Award given to students with high academic achievement during a semester.</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>School of Informatics Web Fest, Indiana University, 2004</h3>
                        <h4>WebFest Web Design Contest winner, 1st Place</h4>
                        <ul>
                        	<li>Placed first place with team in a web design contest to design a website for a local business in two hours. Mocked-up design and gained developer buy-in. Performed Photoshop and CSS work and assisted with development.</li>
                        </ul>
                    </div>
                    <div id="skills" class="resumeSection">
                	<h2>Technical Skills</h2>
                    <hr />
                    <table class="cvSkills">
                        <tr>
                            <td class="cvProductExp">XHTML &amp; CSS</td>
                            <td class="cvYearsExp">5 years</td>
                            <td class="cvSkillsExp">Cross-browser &amp; Standards Compliant Development, WCAG (Accessibility)</td>   
                        </tr>
		                <tr>
                            <td class="cvProductExp">Java</td>
                            <td class="cvYearsExp">3 years</td>
                            <td class="cvSkillsExp">J2EE, JUnit, Swing, JDBC, JavaServer Faces, Android SDK, Log4J, Eclipse, Netbeans, JDeveloper</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">C# .NET</td>
                            <td class="cvYearsExp">3 years</td>
                            <td class="cvSkillsExp">Visual Studio 2005, 2008 and 2010, .NET Compact Framework, ASP .NET, SQL Server/MySQL Integration, WPF, Windows Forms</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">PHP</td>
                            <td class="cvYearsExp">3 years</td>
                            <td class="cvSkillsExp">LAMP Stack, MySQL Integration, Zend Framework, Safe Authentication, SQL Injection Prevention, AJAX Backend Development</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">C</td>
                            <td class="cvYearsExp">2 years</td>
                            <td class="cvSkillsExp">Arduino (hardware development)</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">Javascript</td>
                            <td class="cvYearsExp">3 years</td>
                            <td class="cvSkillsExp">JQuery (MIN and UI), DOM manipulation, AJAX, Firefox Extension Development (with XUL &amp; Javascript)</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">XML</td>
                            <td class="cvYearsExp">2 years</td>
                            <td class="cvSkillsExp">AJAX, XPath, Java Frameworks</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">MySQL</td>
                            <td class="cvYearsExp">3 years</td>
                            <td>SQL, Stored Procedure/Function Development, LAMP Stack</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">Microsoft SQL Server</td>
                            <td class="cvYearsExp">2 years</td>   
                            <td class="cvSkillsExp">T-SQL (Stored Procedure/Function Development), Administration</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">Oracle DB</td>
                            <td class="cvYearsExp">2 years</td>
                            <td class="cvSkillsExp">SQL, PL/SQL (OCP Certified)</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">Oracle E-Business Suite</td>
                            <td class="cvYearsExp">2 years</td>   
                            <td class="cvSkillsExp">Human Resources, Accounts Receivables, Reports, Oracle Forms, Interfaces, APIs, System Integration, Basic Apps Administration</td>
                        </tr>
                        <tr>
                            <td class="cvProductExp">Oracle SOA Suite</td>
                            <td class="cvYearsExp">1 year</td>
                            <td class="cvSkillsExp">Web Services, JDeveloper, BPEL</td>   
                        </tr>                        
<!--                        <tr>
                            <td>Professional Certifications:</td>
                            <td>Oracle Certified Associate PL/SQL Developer</td>
                            <td>Oracle Certified Professional PL/SQL Developer</td>
                        </tr>-->
                    </table>
                </div>
                </div>
             </div>
        </div>
	<?php 
	}
	?>
	
