<form method="post" action="fabonacci.php">

Number Limit <input type="text" name="num"><br>
<input type="submit" name="btn">

</form>


<?php

if(isset($_POST['btn'])){

$start = 1;
$end = $_POST['num'];
$count = 1 ;

/*

$cycle = $start + $count; 
   2       1        1   
   3       2        1   
   5       3        2   
   8       5        3   
   13      8        5   
   41      13       8   
   
  */ 
   
$cycle = 1;        

while($cycle <= $end){	
	echo $cycle."<br>";
	
	$cycle = $start + $count;
	
	
	$count = $start;
	$start = $cycle;
	
	}
}
?>