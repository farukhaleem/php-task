
<form method="post" action="even.php">

Staring Number <input type="text" name="num1"><br>
Ending Number <input type="text" name="num2"><br>
<input type="submit" name="btn">

</form>

<?php

if(isset($_POST['btn'])){
	
$a = $_POST['num1'];
$b = $_POST['num2'];;

$x = ceil($a/2);
if(($x*2) == $a){
		$x = $a;
	}else{
		$x = $a+1;
		}

$z = ceil($b/2);
if(($z*2) == $b){
		$z = $b;
	}else{
		$z = $b-1;
		}
for($i = $x; $i <= $z; $i++){
	
	echo $i."<br>";
	$i++;
	}
}?>
