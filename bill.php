<form method="post" action="bill.php">
<input type="text" name="unit">
<input type="submit" name="btn">
</form>



<?php
if(isset($_POST['btn']) && !empty($_POST['unit'])){

$unit = $_POST['unit'];

$price_100= 5;
$price_200= 10;
$price_300= 15;
$price= 25;

$amount_100="";
$amount_200="";
$amount_300="";
$amount="";

switch($b=$_POST['unit']){

case ($b>300):	
	$bill = $_POST['unit']-300;
	$bill_300 = 100;
	$bill_200 = 100;
	$bill_100 = 100;	
break;	
case ($b>200):	
	$bill = 0;
	$bill_300 = $_POST['unit']-200;
	$bill_200 = 100;
	$bill_100 = 100;	
break;	
case ($b>100):	
	$bill = 0;
	$bill_300 = 0;
	$bill_200 = $_POST['unit']-100;
	$bill_100 = 100;	
break;	
default:	
	$bill = 0;
	$bill_300 = 0;
	$bill_200 = 0;
	$bill_100 = $_POST['unit'];	
	}

if($unit<300)
{
	$amount = "0";
	}else{
		$amount = ($unit-300)*$price;
		$unit = 300;		
}
if($unit<200)
{
	$amount_300 = "0";
	}else{
		$amount_300 = ($unit-200)*$price_300;
		$unit = 200;		
		
}
if($unit<100)
{
	$amount_200 = "0";
	}else{
		$amount_200 = ($unit-100)*$price_200;
		$unit = 100;	
}
if($unit<0)
{
	$amount_100 = "0";
	}else{
		$amount_100 = ($unit-0)*$price_100;
		$unit = 0;		
}
$bill_price = $amount_300 + $amount_200+ $amount_100 + $amount;

echo"<table>";
echo"<tr><th>Units Measurement</th><th>Unit Price</th><th>Billing Unit</th><th>Bill Price</th></tr>";
echo "<tr><td>000 - 100</td><td>5</td><td>".$bill_100."</td><td>".$amount_100."</td></tr>";
echo "<tr><td>101 - 200</td><td>10</td><td>".$bill_200."</td><td>".$amount_200."</td></tr>";
echo "<tr><td>201 - 300</td><td>15</td><td>".$bill_300."</td><td>".$amount_300."</td></tr>";
echo "<tr><td>301 <</td><td>25</td><td>".$bill."</td><td>".$amount."</td></tr>";
echo"</table>";
echo"<br>";
echo"Total Units ".$_POST['unit']."<br>";
echo"Total Price : Rs. ".$bill_price."<br>";

}





?>

<style>
table, th, td{
 border: 1px solid black;
 border-collapse: collapse;
	}
th, td {
  padding: 5px 30px;
  text-align: left;    
}	
</style>