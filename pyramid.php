<form method="post" action="pyramid.php">

Lines Limit <input type="text" name="num"><br>
<input type="submit" name="btn">

</form>


<?php

if(isset($_POST['btn'])){

$a = ($_POST['num']*2);
$count = $a-1;
$x = $count;
		 
	while($x >= 0){
	$m = $x ;			
			
			$v = round($x/2);
			if(($v*2) != $x){

			$b = $x ;
			while($b >=0){
			echo "&nbsp";
			$b--;
			}

				while($m <= $count ){
				echo "*";
				$m++;
				}
			
		echo "<br>";
		}
	$x--;	
		
}
}
?>