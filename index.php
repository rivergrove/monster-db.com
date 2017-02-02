<!-- File purpose: Home and navigation page. -->

<!DOCTYPE html>
<html>
	<?php include "head.html"; ?>
<body>
	<?php include_once("analytics.php") ?>
	<?php
		/* declare variables */
		$search_file = "offspring.php";

		include($_SERVER['NFSN_SITE_ROOT'] . "protected/root.php");
		include("nav_bar.html");
	?>

		<div class="w3-row">
			<div id="ic1" class="w3-col w3-container">
				<h3>Purpose:</h3>
				<p>Search the database of monsters from the Game Boy Color game, Dragon Warrior Monsters, to make the ultimate monster. New to the game? Learn more <a href="<? echo $root . 'about.php' ?>"><font color="#179BCC"><strong>here</strong></font></a>.</p>
			</div>
			<div id="ic2" class="w3-col w3-container">
			</div>
			<div id="ic3" class="w3-col w3-container">
				<br></br>
				<h2 id="body_title"><strong>Select an option to search by:</strong></h2>
			</div>
		</div> 

		<div class="w3-row">
			<div id="ic4" class="w3-col w3-container"></div>
			<div id="ic5" class="w3-col w3-container">
				<a href="<? echo $root . 'offspring.php' ?>">
					<img class="search_image" src = "<? echo $root . $img_dir . 'offspring.png' ?>" 
						onmouseover="this.src='<? echo $root . $img_dir . "offspring_hover.png" ?>';"
						onmouseout="this.src='<? echo $root . $img_dir . "offspring.png" ?>';">
					<img>
				</a>
				<h2 class="search_type">offspring</h2>
			</div>
			<div id="ic6" class="w3-col w3-container">
				<a href="<? echo $root . 'parent.php' ?>">
					<img class="search_image" src = "<? echo $root . $img_dir . 'parent.png' ?>"
						onmouseover="this.src='<? echo $root . $img_dir . "parent_hover.png" ?>';"
						onmouseout="this.src='<? echo $root . $img_dir . "parent.png" ?>';">
					<img>
				</a>
				<h2 class="search_type">parent</h2>
			</div>
			<div id="ic7" class="w3-col w3-container">
				<a href="<? echo $root . 'efficient_path.php' ?>">
					<img class="search_image" src = "<? echo $root . $img_dir . 'efficient_path.png' ?>" 
						onmouseover="this.src='<? echo $root . $img_dir . "efficient_path_hover.png" ?>';"
						onmouseout="this.src='<? echo $root . $img_dir . "efficient_path.png" ?>';" >
					<img>
				</a>
				<h2 class="search_type">efficient path</h2>
			</div>
			<div id="ic8" class="w3-col w3-container">
				<a href="<? echo $root . 'moves.php' ?>">
					<img class="search_image" src = "<? echo $root . $img_dir . 'moves.png' ?>"
						onmouseover="this.src='<? echo $root . $img_dir . "moves_hover.png" ?>';"
						onmouseout="this.src='<? echo $root . $img_dir . "moves.png" ?>';">
					<img>
				</a>
				<h2 class="search_type">move</h2>
			</div>
		</div>
</body>
</html>