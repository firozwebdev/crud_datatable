<?php
    include 'config/config.php';
    include 'lib/Database.php';
    $db= new Database();
	$query = "select * from countries";
	$result = $db->select($query);
	
	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
		$rows[] = $r;
	}
	print json_encode($rows);

?>
