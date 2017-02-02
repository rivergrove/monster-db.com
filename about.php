<!-- File Purpose: About page describing the game and the database. -->

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

	<div class="w3-row">

		<div id="ac1" class="w3-col w3-container">
			<img id="about_image" src="<?= $root . $img_dir . 'about.png' ?>">
			</img>
			<h2 class="body_title">about</h2>
			<br></br>
			<h4 class="about_menu"><a href="#story">story</a></h4>
			<h4 class="about_menu"><a href="#breeding">breeding</a></h4>
			<h4 class="about_menu"><a href="#efficient_path">efficient breeding</a></h4>
			<h4 class="about_menu"><a href="#database">database</a></h4>
		</div>

		<div id="ac2" class="w3-col w3-container"></div>

		<div id="ac3" class="w3-col w3-container">
			
			<br></br>
			<img id="start_menu" class="gameplay" src="<?= $root . $img_dir . 'gameplay/start.png' ?>"></img>
			<p class="gameplay_text">Start Menu from Dragon Warrior Monsters by Enix<p>
			<br></br>
			<p>With over 2.4 million copies sold <sup><a href="#sources">[1]</a><a href="#sources">[2]</a></sup>, Dragon Warrior Monsters (released as Dragon Quest Monsters in Japan) is the 15th best-selling Game Boy Color game. The game is an extension of the wildly popular Japanese Dragon Quest series, which has sold over 64 million games worldwide<sup><a href="#sources">[3]</a></sup>. Dragon Quest's popularity stems from its superior story telling, thoughtful gameplay and inspired artwork from Akira Toriyama, the creator of mangas including Dragon Ball<sup><a href="#sources">[4]</a></sup>.</p>

			<br></br>
			<p id="story"></p>
			<br></br>
			<br></br>
			<h2 class="about_head">story</h2>
			<br></br>
			<img class="gameplay" src="<?= $root . $img_dir . 'gameplay/outside_battle.png' ?>"></img>
			<p class="gameplay_text">Arena battle from Dragon Warrior Monsters by Enix<p>
			<br></br>
			<p>Your name is Terry. Your sister Milayou has just been kidnapped in the night by the monster, Warubou. You must travel to the Kingdom of GreatLog to rescue her. Along the way you will need to acquire a party of monsters, travel through portals to other lands, and battle new monsters and trainers that cross your path.
			</p>

			<br></br>
			<p id="breeding"></p>
			<br></br>
			<br></br>
			<h2 class="about_head">breeding</h2>
			<br></br>
			<img class="gameplay" src="<?= $root . $img_dir . 'gameplay/party.png' ?>"></img>
			<p class="gameplay_text">Main menu displaying monsters from <br>Dragon Warrior Monsters by Enix<p>
			<br></br>
			<p> To withstand the arduous challenges ahead, you will need to create the strongest monsters by breeding the monsters you catch. After completing F Class in the Arena, Terry can breed two monsters that are level 10 or higher at the shrine at the bottom of the GreatLog Kingdom. A male monster and female monster can breed to create offspring with moves and stats passed down from both parents. The strongest monsters are only acquired through breeding.   
			</p>
			<br></br>
			<p>Monsters are categorized into the following families:
			</p>
			<br></br>
			<ul style="list-style:none">
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/beast.png' ?>"><img><p class="about_family_text">beast</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/bird.png' ?>"><img><p class="about_family_text">bird</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/boss.png' ?>"><img><p class="about_family_text">boss</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/bug.png' ?>"><img><p class="about_family_text">bug</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/devil.png' ?>"><img><p class="about_family_text">devil</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/dragon.png' ?>"><img><p class="about_family_text">dragon</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/material.png' ?>"><img><p class="about_family_text">material</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/plant.png' ?>"><img><p class="about_family_text">plant</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/slime.png' ?>"><img><p class="about_family_text">slime</p></li>
				<li><img class="about_family_image" src="<? echo $root . $img_dir . 'family/zombie.png' ?>"><img><p class="about_family_text">zombie</p></li>
			</ul>
			<br></br>
			<p>Although there are many recipes for breeding two specific monsters to yield a specific monster (e.g. dracolord1 = servant + andreal), not all monster combinations have recipes. This is where families come into play. There is a recipe for every family combination (e.g. beast + slime). So if breeding two monsters does do not have a specific recipe, breeding will instead follow the family recipe. For example, there is no recipe for spotslime + hargon, so if we breed them we will instead get kingslime which is created from breeding any monster from the slime family with a monster from the boss family.</p>
			<br></br>
			<p>Also of note, breeding order matters. The first parent is called the <i>pedigree</i>. The offspring of two parents will always match the family of the pedigree, except for specific recipes that create powerful monsters from the boss family.</p>
			<br></br>
			<p> There are hundreds of possible breeding combinations, so this database seeks to simplify the intricate web of breeding possibilities so you can create the strongest monsters while taking minimal steps. The database offers the following searches: </p>
			<br></br>
			<ul>
				<li class="about_bullet"><strong>Offspring:</strong> Returns all breeding combinations that yield your monster as offspring.</li>
				<li class="about_bullet"><strong>Parent:</strong> Returns all breeding combinations where your desired monster is a parent.</li>
				<li class="about_bullet"><strong>Efficient path:</strong> Returns the most efficient series of breeding combinations to create your monster. </li>
				<li class="about_bullet"><strong>Moves:</strong> Returns all monsters who learn your desired move.</li>
			</ul>

			<br></br>
			<p id="efficient_path"></p>
			<br></br>
			<br></br>
			<h2 class="about_head">efficient breeding</h2>
			<br></br>
			<img class="gameplay" src="<?= $root . $img_dir . 'gameplay/battle.png' ?>"></img>
			<p class="gameplay_text">Arena battle from Dragon Warrior Monsters by Enix<p>
			<br></br>
			<p>Efficient path is the most nuanced search for the database, but once understood, it becomes a powerful resource for the game. Let's search for the most efficient breeding path to <strong>servant</strong>, one of the strongest monsters in the zombie family. The following output represents the family tree for servant:</p>
			<br></br>
			<img id="servant_table" class="gameplay" src="<?= $root . $img_dir . 'servant_table.png' ?>"></img>
			<br><br>
			<p>A visual of the output might look like the following:</p>
			<br></br>
			<img id="tree_image" class="gameplay" src="<?= $root . $img_dir . 'tree.png' ?>"></img>
			<br><br>
			<p>Tree level 1 is the monster we want to breed to, in this case, servant. Tree level 2 are servant's parents. Level 3 are servant's grandparents, and so on. The top level, or leaves, are any monster in the specified family. Each family has 15-25 monsters to choose from, so we have lots of ways to make our monster. All efficient path searches truncate in a family or a monster that cannot be obtained from breeding like slime, bigroost or watabou.</p>
			<br></br>
			<p>There are other possible trees for servant. However, the search looks at each monster and finds the minimum number of family leaves required to make the searched monster, in this case, 6. If there are multiple paths that are equally efficient, all rows will be returned.</p>
			
			<br></br>
			<p id="database"></p>
			<br></br>
			<br></br>
			<h2 class="about_head">database</h2>
			<br></br>
			<img class="gameplay" src="<?= $root . $img_dir . 'gameplay/portal.png' ?>"></img>
			<p class="gameplay_text">Terry outside of the first portal from <br>Dragon Warrior Monsters by Enix<p>
			<br></br>
			<p>The database runs on the RDBMS MySQL. All searches are cached on the backend of the website to speed up processing.</p>
			<br></br>
			<p>The data was pulled primarily from <a style="color:#179BCC; font-weight:bold;" href="http://dragonquest.wikia.com/wiki/DWM_Breeding">Dragon Quest Wiki</a> and <a style="color:#179BCC; font-weight:bold;" href="http://www.woodus.com/den/games/dwm1gbc/breeding.php">Dragon's Den</a>. The data required a fair amount of processing, and not all possible recipes are covered, so please shoot over a <a style="color:#179BCC; font-weight:bold;"href="contact.php">message</a> if you find any errors or a new recipe not included in the database.</p>
			<br></br>
			<p>Aside from screenshots of the game, all images were drawn on a Cintiq tablet with Photoshop.</p>

			<br></br>
			<br></br>
			<br id="sources"></br>
			<br></br>
			<h4>sources</h4>
			<br></br>
			<ol>
				<li class="source_bullet"><a href="http://www.the-magicbox.com/Chart-JPPlatinum.shtml">Japanese copies sold</a></li>
				<li class="source_bullet"><a href="http://www.the-magicbox.com/Chart-USPlatinum.shtml">U.S. copies sold</a></li>
				<li class="source_bullet"><a href="http://press.na.square-enix.com/releases/277/crystal-dynamics-unveils-rise-of-the-tomb-raider">Dragon Quest worldwide sales as of 2014</a></li>
				<li class="source_bullet"><a href="http://www.gamasutra.com/view/feature/3520/the_history_of_dragon_quest.php?print=1">Artwork by Akira Toriyama</a></li>
			</ol>
			<br></br>
			<br></br>
		</div>
	</div>

</body>
</html>