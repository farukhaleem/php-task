
<?php


// shape 1
for($i = 0; $i <= 15; $i++){
	
	for($a = 0; $a <= $i; $a++){
	echo "*";
	}
	echo "<br>";
}

// shape 2
for($i = 0; $i <= 15; $i++){
	
	for($a = 0; $a <= $i; $a++){
	
	$m = "abcdefghijklmnopqrstuvwxyz";
	echo $m[$a];
	
	}
	echo "<br>";
}

// shape 3
for($i = 0; $i <= 15; $i++){
	
	for($a = 1; $a <= $i; $a++){
	echo "$a";
	}
	echo "<br>";
}
echo "<br>";

// shape 4
$m = 1;
for($i = 0; $i <= 8; $i++){
	for($a = 0; $a <= $i; $a++){
	echo $a+1;
	
	}

$g= 16-(($i*4)-16);	

while($g>0){

	echo "&nbsp";
	$g--;
	}
	
	$m = ($m) * $a;
	echo " = " .$m ."";
	
	
echo"<br>";
}

?>