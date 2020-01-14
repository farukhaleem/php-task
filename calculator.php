<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

function add($a,$b){
		$c = $a+$b;
		return $c;
		}
function sub($a,$b){
		$c = $a-$b;
		return $c;
		}
function mul($a,$b){
		$c = $a*$b;
		return $c;
		}
function div($a,$b){
		$c = $a/$b;
		return $c;
		}
	
if($_SERVER['REQUEST_METHOD']=='POST'){	

	if(!empty($_POST['num1']) && !empty($_POST['num2']))
	{
	
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	
	if(isset($_POST['add'])){
		echo add($a,$b);
		
		}else if(isset($_POST['sub'])){
			echo sub($a,$b);
			
			}else if(isset($_POST['mul'])){
				echo mul($a,$b);
				
				}else if(isset($_POST['div'])){
					echo div($a,$b);
					}
	
	}else{
		echo"Please Fill the both Feilds.";
		
	}
}
?>
<body>

<form method="post" action="calculator.php"> 
Enter Number:<input type="text" name="num1"><br>
Enter Number:<input type="text" name="num2"><br>
<br>
<input type="submit" name="add" value="ADD">
<input type="submit" name="sub" value="SUB">
<input type="submit" name="div" value="DIV">
<input type="submit" name="mul" value="MUL">
</form>
<div></div>
</body>
</html>