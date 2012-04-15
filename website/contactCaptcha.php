<?php

	if(isset($_POST["captchaAnswer"]))
	{
		$answer = $_POST["captchaAnswer"];
		
		/* Currently question is "what is my last name" */
		
		if( strtolower($answer) == 'zimmerman' )
		{
			printContactInfo();
		}
		else
		{
				echo 'Wrong';
		}
	}
	
	function printContactInfo()
	{
		/* Put contact information here */
		echo 'Zachary Zimmerman<br />';
		echo 'zach@zachzimm.com<br />';
		echo '+1.812.575.0715';
	}
?>