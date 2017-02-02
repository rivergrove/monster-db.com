<!-- File Purpose: Contact page. -->

<!DOCTYPE html>
<html>
	<?php include "head.html"; ?>
<body>

	<?php 
		/* declare variables */
		$search_file = "offspring.php";

		include_once("analytics.php");
		include($_SERVER['NFSN_SITE_ROOT'] . "protected/root.php");
		include "nav_bar.html";
	?>

	<br></br>
	<h2 class="contact_about">Contact</h2>
	<br></br>
	<img id="contact_image" src="<? echo $root . $img_dir . 'contact.png' ?>"></img>
	<h3 id="contact_text">anthony[dot]olund[at]gmail[dot]com</h3>

</body>
</html>