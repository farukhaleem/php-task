
<form method="post" action="prime.php">

Staring Number <input type="text" name="num1"><br>
Ending Number <input type="text" name="num2"><br>
<input type="submit" name="btn">

</form>

<?php
if(isset($_POST['btn'])){
	
	$count = 0;  
	$num = $_POST['num1'];  
	$limit = $_POST['num2'];
	$m = "";
	
	if($limit<=50){
		$m = 50;
		
		}else{
			$m = $limit/5;
			
			}
	
	while ($count < $m )  
	{ 
	 
	$div_count=0;
		  
		for ( $i=1; $i<=$num; $i++)  
		{  
			if (($num%$i)==0)  
			{  
			$div_count++;  
			}  
		}  
		if ($div_count<3)  
		{  
			if($num<=$limit){
			echo $num." <br> ";  
			}
			$count=$count+1;  
			
			
		}  
	$num=$num+1;  
	}  

}
?>
