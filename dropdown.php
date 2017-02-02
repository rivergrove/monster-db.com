<?php

/* File purpose: Create search suggestion dropdown over family icons. */

include($_SERVER['NFSN_SITE_ROOT'] . "protected/db_connect.php");
	$family_ray = array('beast','bird','boss','bug','devil','dragon','material','plant','slime','zombie');
	$ray = array();

	for ($x = 0; $x <= 9; $x++){
	$sql = "select monster
				from moves
		      where family = '".$family_ray[$x]."'
		      order by 1";
	$result = $conn->query($sql);
	$y = 0;

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$ray[$y][$x] = $row['monster'];
	    	$y = $y + 1;
	    }
	}
	}
	$conn->close(); 

	$beast = array_column($ray, 0);
	$bird = array_column($ray, 1);
	$boss = array_column($ray, 2);
	$bug = array_column($ray, 3);
	$devil = array_column($ray, 4);
	$dragon = array_column($ray, 5);
	$material = array_column($ray, 6);
	$plant = array_column($ray, 7);
	$slime = array_column($ray, 8);
	$zombie = array_column($ray, 9);

?>
<div class="w3-row">
<div id="dc1" class="w3-col w3-container"></div>
<div id="dc2" class="w3-col w3-container">
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/beast.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($beast as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 } 
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/bird.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($bird as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }  
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/boss.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($boss as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/bug.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($bug as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/devil.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($devil as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/dragon.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($dragon as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/material.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($material as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/plant.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($plant as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/slime.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($slime as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>";  
	 }
  	?>
  </div>
</div>
<div class="w3-dropdown-hover">
  <img class="family_image" src="<?= $root . $img_dir . "family/zombie.png" ?>"></img>
  <div class="w3-dropdown-content">
  	<?php 
	 foreach ($zombie as $value){
	  	echo "<form action='".$search_file."'>
	  		<input class='button' value='".$value."' name='keyword' type='submit'>
	  		</form>"; 
	 }
  	?>
  </div>
</div>
</div>
</div>