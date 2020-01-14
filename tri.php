
<form method="post" action="tri.php">
Number Limit <input type="text" name="num"><br>
<input type="submit" name="btn">
</form>


<?php

if(isset($_POST['btn'])){

$count = $_POST['num'];
$space = "&nbsp"."&nbsp";

for($i = 0; $i <= $count; $i++){
	
	$l = $i;	
	echo "0".$space;	
	
		if($i > 0){
		echo $i.$space;
		}
		
		for($a = 1 ; $a <= $l; $a++){
		
		if($a>1){
		echo $i * $a.$space;
		}
	}
	echo "<br>"."<br>";
}
}
?>