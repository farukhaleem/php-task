<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px 30px;
  text-align: left;    
}
</style>

<form action="denomination.php" method="post">
<input type="text" name="amount">
<input type="submit" name="btn">

</form>

<?php

if(isset($_POST['btn'])){
$a=$_POST['amount'];

$fivetho = "";
$onetho = "";
$fivehun = "";
$onehun = "";
$fifty = "";
$twenty = "";
$ten = "";
$five = "";
$two = "";
$one = "";

if($a<5000)
{
	$fivetho = "";
	}else{
		$fivetho=floor($a/5000);
		$a=$a-$fivetho*5000;
}
if($a<1000)
{
	$onetho = "";
	}else{
		$onetho=floor($a/1000);
		$a=$a-$onetho*1000;
}
if($a<500)
{
	$fivehun = "";
	}else{
		$fivehun=floor($a/500);
		$b=$fivehun*500;
		$a=$a-$b;
}
if($a<100)
{
	$onehun = "";
	}else{
		$onehun=floor($a/100);
		$a=$a-$onehun*100;
}
if($a<50)
{
	$fifty = "";
	}else{
		$fifty=floor($a/50);
		$a=$a-$fifty*50;
}
if($a<20)
{
	$twenty = "";
	}else{
		$twenty=floor($a/20);
		$a=$a-$twenty*20;
}
if($a<10)
{
	$ten = "";
	}else{
		$ten=floor($a/10);
		$a=$a-$ten*10;
}
if($a<5)
{
	$five = "";
	}else{
		$five=floor($a/5);
		$a=$a-$five*5;
}
if($a<2)
{
	$two = "";
	}else{
		$two=floor($a/2);
		$a=$a-$two*2;
}
if($a<1)
{
	$one = "";
	}else{
		$one=floor($a/1);
		$a=$a-$one*1;
}
?>
<table>
<?php
echo "<tr><td>5000 </td><td> ".$fivetho."</td></tr>";
echo "<tr><td>1000 </td><td>  ".$onetho."</td></tr>";
echo "<tr><td>500 </td><td>  ".$fivehun."</td></tr>";
echo "<tr><td>100 </td><td>  ".$onehun."</td></tr>";
echo "<tr><td>50 </td><td>  ".$fifty."</td></tr>";
echo "<tr><td>20 </td><td>  ".$twenty."</td></tr>";
echo "<tr><td>10 </td><td>  ".$ten."</td></tr>";
echo "<tr><td>5 </td><td>  ".$five."</td></tr>";
echo "<tr><td>2 </td><td>  ".$two."</td></tr>";
echo "<tr><td>1 </td><td>  ".$one."</td></tr>";
echo "<tr><td>Total </td><td>  ".$_POST['amount']."</td></tr>";
}

?>
</table>
