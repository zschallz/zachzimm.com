<?php 
	// Common functions go here

	function checkCountry()
	{		
		if( strstr($_SERVER['HTTP_HOST'], 'zachzimm.co.uk') )
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
?>