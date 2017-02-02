<!-- File purpose: Parent page. Returns all breeding combinations where your desired monster is a parent. --> 

<!DOCTYPE html>
<html>
	<?php include "head.html"; ?>
<body>

	<?php include_once("analytics.php") ?>
	<?php
		/* declare variables */
		$search_file = "parent.php";
		$body_image ="parent.png";
		$body_title = "parent";
		$body_p = "Returns all breeding combinations where your desired monster is a parent.";
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
		<? include("dropdown.php"); ?>

		<div class="w3-row">
			<div id="oc1" class="w3-col w3-container"></div>
			<div id="oc2" class="w3-col w3-container">
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
			<div id="oc3" class="w3-col w3-container"></div>
			<div id="oc4" class="w3-col w3-container">
			  <?php
			  	$keyword = $_GET["keyword"];
			  ?> 
			  <h2 class="table_title"><? echo "Uses for " . $keyword; ?></h2>

			  <br></br>
			  <table class="w3-table-all w3-hoverable">
			  	<thead>
				  	<tr>
				  		<th>offspring</th>
				  		<th>parent 1</th>
				  		<th>parent 2</th>
				  	</tr>
				</thead>
				<tbody>
					<?php
						include($_SERVER['NFSN_SITE_ROOT'] . "protected/db_connect.php");
						$keyword = $_GET["keyword"];
						$keyword = mysqli_real_escape_string($conn, $keyword);

						$sql = "select *
									from breeding
								  where (p1 = '" . $keyword . "'
								     or p2 = '" . $keyword . "')
								     and offspring != 'boss family'
								 order by 1,2,3";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {
						    ?>
						    	<tr>
						    		<td><?php echo $row['offspring']?></td>
						    		<td><?php echo $row['p1']?></td>
						    		<td><?php echo $row['p2']?></td>
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