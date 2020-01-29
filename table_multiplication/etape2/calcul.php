<?php

 for ($i=0;$i<=10;$i++)
    {
    	if(isset($_POST['check_'.$i])){
    		echo "Table de multiplication de ".$i." <br>";
    		for($j=0;$j<=10;$j++)
			 {
			  $r=$i*$j;
			  echo $i."x".$j. "=".$r .'<br>';
			 }
			 echo '<br>';
    	}
    }
?>