<?php
	include 'classes/sql.php';

	$s = new SQL();

	echo "<h3>PICTURE</h3> <br>";
	$id = 8;
	$result = $s->searchSpecificImage($id);
	$image = $result['image'];
    echo "<img src='upload/$image'>";

?>
