<?php
	include_once('do/common.php');
	
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
		echo checkCountry();
		$isInUk = checkCountry();
		/* Put contact information here */
		echo 'Zachary Zimmerman<br />';
		if($isInUk == null || !$isInUk)
			echo 'zach@zachzimm.com<br />';
		else
			echo 'zach@zachzimm.co.uk<br />';
		echo '<!-- ' . $isInUk . ' -->';
		if($isInUk == null || !$isInUk)
			echo '+1 812-575-0715';
		else
			echo '+44 020 8123 4761';
	}
?>