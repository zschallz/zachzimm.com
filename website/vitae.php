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
					</ul>   
                </div>
                <div id="publications" class="resumeSection">
                	<h2>Publications</h2>
                    <hr/>
                    <div class="experienceItem">
                    	<h3>Book Chapters</h3>
                        <ul>
                        	<li>Hazlewood, W. R., Connelly, K., Caine, K. E.,<b>Schall-Zimmerman, Z.</b>, & Blanton, G. (in press). <i>Property Damage, Purchasing Orders, and Power Outages, Oh My!: Suggestions for Planning your next In the Wild Deployment.</i> In S. Consolvo, D. W. McDonald & B. Harrison (Eds.), Ubiquitous Computing Deployments. Boston, MA: MIT Press.</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Journal Papers</h3>
                        <ul>
                        	<li>Caine, K. E., Zimmerman, C. Y., <b>Schall-Zimmerman, Z.</b>, Hazlewood, W. R., Camp, L. J., Connelly, K. H., Huber, L. L, & Shankar, K. (in press). <i>DigiSwitch: A device to allow older adults to monitor and direct the collection and transmission of health information collected at home.</i> Journal of Medical Systems. <a href="http://dl.acm.org/citation.cfm?id=1883016&dl=ACM&coll=DL&CFID=48356911&CFTOKEN=69690468">View PDF at ACM</a></li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Conference Papers</h3>
                        <ul>
                        	<li>Caine, K. E., Zimmerman, C. Y., <b>Schall-Zimmerman, Z.</b>, Hazlewood, W. R., Sulgrove, A., Camp, L. J., Connelly, K., Lorenzen-Huber, L., & Shankar, K. (2010). <i>DigiSwitch: Design and Evaluation of a Device for Older Adults to Preserve Privacy While Monitoring Health at Home.</i> In Proceedings of the 1st ACM International Health Informatics Symposium (IHI'10). ACM, New York, NY, USA, 153-162. [17.1% acceptance rate] <b>(Best Paper: Privacy and Security Track)</b> <a href="http://dl.acm.org/citation.cfm?id=1882992">View proceedings at ACM</a></li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Poster Papers</h3>
                        <ul>
                        	<li><B>Schall-Zimmerman, Z.</B> (2008). <i>Surfing with Ambient Trust.</i> Conference poster presentation, Accepted. Collection: Telecommunications Policy Research Conference. 28-30 Sept 2008, Arlington VA.</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Workshop Papers</h3>
                        <ul>
                        	<li><B>Schall-Zimmerman, Z.</B>, & Camp, L. J. (2010). <i>Elder-friendly Design's Effects on Acceptance of Novel Technologies.</i> <a href="http://www.ece.nus.edu.sg/stfpage/eledbl/chi2010/">CHI 2010 Workshop on Senior-Friendly Technologies: Interaction Design for the Elderly.</a> April, 2010. <a href="http://zachzimm.com/research/Elder-friendly Design's Effects on Acceptance of Novel Technologies.pdf">View Draft</a></li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>Extended Abstracts</h3>
                        <ul>
                        	<li>Lorenzen-Huber, L. M., Camp, L. J., Connelly, K., Shankar, K., Caine, K. E., Hazelwood, W. R., & <b>Schall-Zimmerman, Z.</b> (2010). <i>A Privacy Framework for Evaluating In-home technologies. [Abstract]</i> Program abstracts of the 63rd Annual Meeting of the Gerontological Society of America.</li>
                        	<li>Sabanovic, S, Reeder, S., Kechavarzi, B., & <b>Schall-Zimmerman, Z.</B> (2011). <i>Designing a robot through prototyping in the wild.</i> In Proceedings of the 6th international conference on Human-robot interaction (HRI ’11). <a href="http://dl.acm.org/citation.cfm?id=1957656.1957750">View PDF</a></li>
                        	<li>Hazlewood, W. R., Schall-Zimmerman, Z., Odom, W., Jung, H., & Connelly, K. (2010). <i>Participatory Design with a Community of Seniors.</i> In Extended Abstracts of the 4th International Conference on Pervasive Computing Technologies for Healthcare (Pervasive Health 2010).</li>
                        </ul>
                    </div>
                </div>
                <div id="presentations" class="resumeSection">
                	<h2>Presentations</h2>
                    <hr/>
                    <div class="experienceItem">
                    	<h3>Poster Sessions</h3>
                        <ul>
                        	<li>Schall-Zimmerman, Z., & Camp, L. J. (2009). <i>Ambient Trust Cube.</i> Presented as Demo/Poster at <a href="http://www.thei3p.org/events/past_events.html">I3P Insider Threats: Strategies for Staying Secure, 2009</a>.</li>
                            <li>Schall-Zimmerman, Z., & Camp, L. J. (2008). <i>Ambient Trust Cube.</i> Presented as Demo/Poster at <a href="http://www.tprcweb.com/">TPRC 2008</a>.</li>
                            <li>Schall-Zimmerman, Z., & Camp, L. J. (2008). <i>SWAT: Surfing with Ambient Trust.</i> Presented as Demo/Poster at <a href="http://www.thei3p.org/events/insider_workshop08.html">I3P Insider Threat Workshop 2008</a>.</li>
                        </ul>
                    </div>
                 </div>
                 <div id="experience" class="resumeSection">
                    <h2>Experience</h2>
                    <hr />
                    <div class="experienceItem">
                        <h3>Associate Consultant</h3>
                        <h4><a href="http://www.oracle.com/">Oracle Corporation</a>, 08/10-Present</h4>
                        <ul>
                        	<li><b>Areas:</b> <i>Software Development, Software Unit Testing</i></li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                        <h3>Research Assistant</h3>
                        <h4><a href="http://informatics.indiana.edu/">Indiana University School of Informatics, 05/10-08/10</a></h4>
                        <ul><li>Project: <a href="projects/dewey.php">Dewey</a></li>
                        	<ul>
                                <li>Helped architect and develop a robot with a sensing platform to detect break-taking in an office environment.</li>
                                <li>Used robot in an in-situ study in an Indiana University office to monitor break-taking habits of participants and using data to suggest breaks.</li>        	
                            </ul>
                            <li><b>Areas:</b> <i>Human-Robot Interaction, Embodiment in Robotics, Software Development, Hardware development</i></li>
                        </ul>   
                    </div>
                    <div class="experienceItem">
                        <h3>Research Assistant</h3>
                        <h4><a href="http://informatics.indiana.edu/">Indiana University School of Informatics, 01/10-08/10</a></h4>
                        <ul><li>Project: <a href="http://ethos.indiana.edu/">DIMA: Dietary Intake Monitoring Application</a></li>
                        	<ul>
                                <li>Ported a .NET Mobile application used by dialysis patients to monitor their dietary intake to Android platform</li>                 	
                            </ul>
                            <li><b>Areas:</b> <i>Clinical Software, Mobile Software, Human-Computer Interaction, Software Development</i></li>
                        </ul>   
                    </div>
                    <div class="experienceItem">
                        <h3>Undergraduate Research Assistant</h3>
                        <h4><a href="http://informatics.indiana.edu/">Indiana University School of Informatics, 05/08-01/10</a></h4>
                        <ul><li>Project: <a href="http://ethos.indiana.edu/">ETHOS: Ethical Technologies in the Homes of Seniors</a></li>
                        	<ul>
                                <li>Helped architect and develop system used to collect data from devices used by participants in logitundal study.</li>
                                <li>Lead and managed a small group of student researchers who helped develop system and prototypes for study.</li>
                                <li>Participated in collecting data from participants using Focus Groups</li>
                                <li>Helped conduct user studies to evaluate ease-of-use and appropriateness of newly developed technologies</li>
                                <li>Performed duties of lab manager while in the lab manager's absence.</li>
                                <li>Developed own prototype (Ambient Trust) and used it to design and conduct published in-situ study</li>                    	
                            </ul>
                            <li><b>Areas:</b> <i>Financial Security, Human-Computer Interaction, Ambient Intelligence, Software Development, Project Management, Hardware Development, Gerontology</i></li>
                        </ul>   
                    </div>
                </div>
                <div id="honors" class="resumeSection">
                	<h2>Honors, Awards, and Funding</h2>
                    <hr/>
                    <div class="experienceItem">
                    	<h3>Center for Applied Cybersecurity Research, Indiana University, 2010</h3>
                        <h4>Travel Grant</h4>
                        <ul>
                        	<li>Provided funding for travel to CHI conference to present paper.</li>
                            <li>Award: $500</li>
                        </ul>
                    </div>
                    <div class="experienceItem">
                    	<h3>School of Informatics Dean's List, Indiana University, 2009</h3>
                        <ul>
                        	<li>Awarded to students with high academic achievement during a semester.</li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
<?php	}
?>