<?php
	include_once('common.php');
	/* 	This is messy, but necessary for now so this script works in my development environments
	 *	TODO: clean it up; detect current page and base path on that.
	 */
	function printNav($curPage)
	{
		$isInUk = checkCountry();
		
		echo '<!-- Country: ' . $isInUk . '-->';
		
		echo '<div class="nav">' . "\n";
		echo '	<ul>' . "\n";
		if( $curPage == 1 )
			echo '		<li class="active"><a href="index.php" class="rootItem">HOME</a></li><!--' . "\n";
		else if( $curPage == 3)
			echo '		<li><a href="../index.php" class="rootItem">HOME</a></li><!--' . "\n";
		else
			echo '		<li><a href="index.php" class="rootItem">HOME</a></li><!--' . "\n";
		if( $curPage == 2 )
			echo '		--><li class="active"><span class="rootItem">INFO&nbsp;</span>' . "\n";
		else
			echo '		--><li><span class="rootItem">INFO&nbsp;</span>' . "\n";
		echo '			<ul>' . "\n";
		
		if( $isInUk == null || !$isInUk )
		{
			if( $curPage == 3 )
				echo '				<li><a class="childItem" href="../resume.php">Resume</a></li>' . "\n";
			else
				echo '				<li><a class="childItem" href="resume.php">Resume</a></li>' . "\n";
		}			
		else
		{
			if( $curPage == 3 )
				echo '				<li><a class="childItem" href="../cv-uk.php">CV</a></li>' . "\n";
			else
				echo '				<li><a class="childItem" href="cv-uk.php">CV</a></li>' . "\n";
		}
		
		if( $curPage == 3 )
			echo '				<li class="bottom"><a class="childItem" href="../vitae.php">Academics</a></li>' . "\n";			
		else
			echo '				<li class="bottom"><a class="childItem" href="vitae.php">Academics</a></li>' . "\n";
		echo '			</ul>' . "\n";
		echo '		</li><!--' . "\n";
		if( $curPage == 3)
			echo '		--><li class="active"><span class="rootItem">PROJECTS&nbsp;</span>' . "\n";
		else
			echo '		--><li><span class="rootItem">PROJECTS&nbsp;</span>' . "\n";
		echo '			<ul>' . "\n";
		if( $curPage == 3 )
			echo '				<li><a class="childItem" href="ambientTrust.php">Ambient Trust</a></li>' . "\n";
		else
			echo '				<li><a class="childItem" href="projects/ambientTrust.php">Ambient Trust</a></li>' . "\n";
		if( $curPage == 3 )
			echo '				<li><a class="childItem" href="netTrust.php">Net Trust</a></li>' . "\n";
		else
			echo '				<li><a class="childItem" href="projects/netTrust.php">Net Trust</a></li>' . "\n";
		if( $curPage == 3 )
			echo '				<li><a class="childItem" href="dewey.php">Dewey</a></li>' . "\n";
		else
			echo '				<li><a class="childItem" href="projects/dewey.php">Dewey</a></li>' . "\n";
		if( $curPage == 3 )
			echo '				<li><a class="childItem" href="fluency.php">Fluency</a></li>' . "\n";
		else
			echo '				<li><a class="childItem" href="projects/fluency.php">Fluency</a></li>' . "\n";
		echo '			</ul>' . "\n";
		echo '		</li><!--' . "\n";
		if( $curPage == 4)
			echo '		--><li class="active"><a href="../blog/" class="rootItem">BLOG</a></li>' . "\n";
		else if( $curPage == 3 )
			echo '		--><li><a href="../blog/" class="rootItem">BLOG</a></li>' . "\n";
		else
			echo '		--><li><a href="blog/" class="rootItem">BLOG</a></li>' . "\n";
		echo '	 </ul>' . "\n";
		echo '</div>' . "\n";	
	}
?>
