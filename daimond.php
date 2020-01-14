
<form method="post" action="daimond.php">
Enter Number <input type="text" name="num"><br>
<input type="submit" name="btn">
</form>


<?php

if(isset($_POST['btn'])){

$count = $_POST['num']*2;
$x = $count;
		 
	while($x >= 1){
	$m = $x ;			
			
			$v = round($x/2);
			if(($v*2) == $x){

			$b = $x ;
			while($b >=0){
			echo "&nbsp";
			$b--;
			}

				while($m <=$count){
				echo "*";
				$m++;
				}
			
		echo "<br>";
		}
	$x--;	
		
}

$x = 0;
		 
	while($x <= $count){
	$m = $x ;			
			
			$v = round($x/2);
			if(($v*2) == $x){

			$b = $x ;
			while($b >=0){
			echo "&nbsp";
			$b--;
			}

				while($m <=$count){
				echo "*";
				$m++;
				}
			
		echo "<br>";
		}
	$x++;	
	}		
}
?>