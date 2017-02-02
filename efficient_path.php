<!-- File Purpose: Efficient path search page. Returns the most efficient series of breeding combinations to create your monster. -->

<!DOCTYPE html>
<html>
	<?php include "head.html"; ?>
<body>

	<?php include_once("analytics.php") ?>
	<?php
		/* declare variables */
		$search_file = "efficient_path.php";
		$body_image ="efficient_path.png";
		$body_title = "efficient path";
		$body_p = "Returns the most efficient series of breeding combinations to create your monster. Results are displayed like a family tree with your monster as the first row, and its parents afterward. For a detailed description, click ";
		$search_prompt = "Begin searching by entering a monster in the search bar above or hover over the family icons for suggestions.";
		if (strlen((string)$_GET["keyword"]) > 0){ 
			$search = TRUE;
		} else {
			$search = FALSE;
		};

		include($_SERVER['NFSN_SITE_ROOT'] . "protected/root.php");
		include("nav_bar.html");
	?>
		
		<!-- suggestions -->
		<?  include("dropdown.php"); ?> 		

		<div class="w3-row">
			<div id="ec1" class="w3-col w3-container"></div>
			<div id="ec2" class="w3-col w3-container">
				<img class="body_image" src="<?= $root . $img_dir . $body_image ?>">
				</img>
				<h2 class="body_title"><?= $body_title ?></h2>
				<br></br>
				<p><? echo $body_p ?><a href="http://www.monster-db.com/about.php#efficient_path"><font color="#179BCC"><strong>here.</strong></font></a></p>
				<br></br>
				<p><?= $search_prompt ?></p>
			</div>

				
		<!-- search -->
		<? if ($search): ?>
			<br></br>
			<br></br>
			<div id="ec3" class="w3-col w3-container"></div>
			<div id="ec4" class="w3-col w3-container">
			  <?php
			  	$keyword = $_GET["keyword"];
			  ?>
			  <h2 class="table_title"><? echo "Efficiently breed to " . $keyword; ?></h2>
			  
					<?php
						include($_SERVER['NFSN_SITE_ROOT'] . "protected/db_connect.php");
						$keyword = $_GET["keyword"];
						$keyword = mysqli_real_escape_string($conn, $keyword);

						$sql = "call breed('".$keyword."')";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							?>
							<br></br>
							  <table class="w3-table-all w3-hoverable">
							  	<thead>
								  	<tr>
								  		<th>offspring</th>
								  		<th>parent 1</th>
								  		<th>parent 2</th>
								  		<th>family count</th>
								  		<th>tree level</th>
								  	</tr>
								</thead>
								<tbody>
							<?
						    while($row = $result->fetch_assoc()) {
						    ?>
						    	<tr>
						    		<td><?php echo $row['offspring']?></td>
						    		<td><?php echo $row['p1']?></td>
						    		<td><?php echo $row['p2']?></td>
						    		<td><?php echo $row['element_count']?></td>
						    		<td><?php echo $row['grp']?></td>
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