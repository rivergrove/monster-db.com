<!-- File purpose: Moves page. Returns all monsters who learn your desired move, along with their family. --> 

<!DOCTYPE html>
<html>
	<?php include "head.html"; ?>
<body>

	<?php include_once("analytics.php") ?>
	<?php
		/* declare variables */
		$search_file = "moves.php";
		$body_image ="moves.png";
		$body_title = "move";
		$body_p = "Returns all monsters who learn your desired move, along with their family. Examples of impressive healing moves include HealUs, Surge and Vivify whereas strong attack moves include BigBang, MegaMagic and GigaSlash.";
		$search_prompt = "Begin searching by entering a move in the search bar above or hover over grey move logo for suggestions.";
		if (strlen((string)$_GET["keyword"]) > 0){ 
			$search = TRUE;
		} else {
			$search = FALSE;
		};

		include($_SERVER['NFSN_SITE_ROOT'] . "protected/root.php");
		include("nav_bar.html");
	?>
		
		<!-- suggestions -->
		<?
			include($_SERVER['NFSN_SITE_ROOT'] . "protected/db_connect.php");

			$sql = "select m 
						from 
					(select m1 as m
						from moves
					union all
					select m2 
						from moves
					union all
					select m3
						from moves) x
					 group by m;";
			$result = $conn->query($sql);
			$ray = array();

			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	array_push($ray, $row['m']);
			    }
			}
			$conn->close(); 
		?>

		<div class="w3-row">
			<div id="navbar">
			   <ul id="dropdown">
			      <li class="topnav"><a href="#"><img src = "<? echo $root . $img_dir . 'moves_dropdown.png' ?>" width=56 height=56><img></a>
			         <ul>
			            <div class="column">
			               <li><?php 
							  for ($x = 0; $x <=18; $x++){
							  	echo "<form action='".$search_file."'>
							  		<input class='button' value='".$ray[$x]."' name='keyword' type='submit'>
							  		</form>"; 
							 } 
						  	?></li>
						  	<li><?php 
							  for ($x = 19; $x <=37; $x++){
							  	echo "<form action='".$search_file."'>
							  		<input class='button' value='".$ray[$x]."' name='keyword' type='submit'>
							  		</form>"; 
							 } 
						  	?></li>
			               <li><?php 
							  for ($x = 38; $x <=56; $x++){
							  	echo "<form action='".$search_file."'>
							  		<input class='button' value='".$ray[$x]."' name='keyword' type='submit'>
							  		</form>"; 
							 } 
						  	?></li>
			               <li><?php 
							  for ($x = 57; $x <=75; $x++){
							  	echo "<form action='".$search_file."'>
							  		<input class='button' value='".$ray[$x]."' name='keyword' type='submit'>
							  		</form>"; 
							 } 
						  	?></li>
			               <li><?php 
							  for ($x = 76; $x <=94; $x++){
							  	echo "<form action='".$search_file."'>
							  		<input class='button' value='".$ray[$x]."' name='keyword' type='submit'>
							  		</form>"; 
							 } 
						  	?></li>
			               <li><?php 
							  for ($x = 95; $x <=113; $x++){
							  	echo "<form action='".$search_file."'>
							  		<input class='button' value='".$ray[$x]."' name='keyword' type='submit'>
							  		</form>"; 
							 } 
						  	?></li>
			         </ul>
			      </li>
			   </ul>
			</div>
		</div>

		<div class="w3-row">
			<div id="mc1" class="w3-col w3-container"></div>
			<div id="mc2" class="w3-col w3-container">
				<img class="body_image" src="<?= $root . $img_dir . $body_image ?>">
				</img>
				<h2 class="body_title"><?= $body_title ?></h2>
				<br></br>
				<p><?= $body_p ?></p>
				<br></br>
				<p><?= $search_prompt ?></p>
			</div>

		<!-- search -->
		<? if ($search): ?>
			<br></br>
			<br></br>
			<div id="mc3" class="w3-col w3-container"></div>
			<div id="mc4" class="w3-col w3-container">
			  <?php
			  	$keyword = $_GET["keyword"];
			  ?>
			  <h2 class="table_title"><? echo "Monsters with " . $keyword; ?></h2>
			  
			  <br></br>
			  <table class="w3-table-all w3-hoverable">
			  	<thead>
				  	<tr>
				  		<th>monster</th>
				  		<th>family</th>
				  	</tr>
				</thead>
				<tbody>
					<?php
						include($_SERVER['NFSN_SITE_ROOT'] . "protected/db_connect.php");
						$keyword = $_GET["keyword"];
						$keyword = mysqli_real_escape_string($conn, $keyword);

						$sql = "select monster, family
									from moves
								  where lower(m1) = lower('".$keyword."')
								     or lower(m2) = lower('".$keyword."')
								     or lower(m3) = lower('".$keyword."')
								 order by 2, 1";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {
						    ?>
						    	<tr>
						    		<td><?php echo $row['monster']?></td>
						    		<td><?php echo $row['family']?></td>
						    	</tr>
						    <?php
						    }
						} else {
						}

						$conn->close();
					?>
				</tbody>
			  </table>
			</div>
		<? endif; ?>
		</div>
</body>
</html>