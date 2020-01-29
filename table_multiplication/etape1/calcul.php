<?php

	$nombre = $_POST['table'];
		echo "La table de multiplication".$nombre.'<br>';
	for ($i=0; $i <=10 ; $i++) { 
	echo $nombre.'x'.$i.'='.$nombre*$i.'<br>';
	}
?>