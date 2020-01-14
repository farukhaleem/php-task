
<style>
#data table,#data th,#data td{
 border: 1px solid black;
 border-collapse: collapse;
	}
th, td {
  padding: 5px 30px;
  text-align: left;    
}	
</style>

<form method="post" action="marks.php"><table>
<tr><th>Subjects</th><th>Enter Marks</th><th>Total Marks</th></tr>
<tr><td>Enlish</td><td><input type="text" name="eng"></td><td>100</td></tr>
<tr><td>Urdu</td><td><input type="text" name="urd"></td><td>50</td></tr>
<tr><td>Math</td><td><input type="text" name="mat"></td><td>100</td></tr>
<tr><td>Physics</td><td><input type="text" name="phy"></td><td>75</td></tr>
<tr><td>Chemistry</td><td><input type="text" name="che"></td><td>75</td></tr>
<tr><td></td><td><input type="submit" name="btn"> </a><input type="submit" value="Reset"></a></td></tr>
</table></form>

<?php

$mat="";
$phy="";
$che="";
$eng="";
$urd="";

if(isset($_POST['btn'])){

$eng =$_POST['eng'];
$urd =$_POST['urd'];
$mat =$_POST['mat'];
$phy =$_POST['phy'];
$che =$_POST['che'];

if($eng =="0"){
	$eng = 1; $eng_m = 0; 
	}else{
		$eng_m =$_POST['eng'];
		}
if($urd =="0"){
	$urd = 1; $urd_m = 0; 
	}else{
		$urd_m =$_POST['urd'];
		}
if($mat =="0"){
	$mat = 1; $mat_m = 0; 
	}else{
		$mat_m =$_POST['mat'];
		}
if($phy =="0"){
	$phy = 1; $phy_m = 0; 
	}else{
		$phy_m =$_POST['phy'];
		}
if($che =="0"){
	$che = 1; $che_m = 0; 
	}else{
		$che_m =$_POST['che'];
		}
	if(empty($_POST['eng']) || empty($_POST['urd']) || empty($_POST['mat']) || empty($_POST['phy']) || empty($_POST['che']) ){
		echo "All Feilds Required ";
	}	
	
	if($eng != "" && $urd != "" && $mat != "" && $phy != "" && $che != ""){

function check($a,$b){

	if($a<100000000 && $a>-999999){
	return 1;
	}else{
	return 0;
	}
}
	
$eng_t =100;
$urd_t =50;
$mat_t =100;
$phy_t =75;
$che_t =75;
		
		if(check($eng,$eng_t)==0 && check($urd,$urd_t)==0 && check($mat,$mat_t)==0 && check($phy,$phy_t)==0 && check($che,$che_t)==0){
	echo"Only Numers Allowed ";
	die();
}else{

function per($a,$b){
	$c= $b/$a*100 ;
	return round($c,2);
	}

$eng_p = per($eng_t,$eng_m);
$urd_p = per($urd_t,$urd_m);
$mat_p = per($mat_t,$mat_m);
$phy_p = per($phy_t,$phy_m);
$che_p = per($che_t,$che_m);

$total = $eng_t + $urd_t + $mat_t + $phy_t + $che_t;
$total_obtain = $eng_m + $urd_m + $mat_m + $phy_m + $che_m;
$per = per($total,$total_obtain);

	if($eng_p>40 && $urd_p>40 && $mat_p>40 && $phy_p>40 && $che_p>0){
		if($per>80){
			$grade = "A1";
			}else if($per>70){
				$grade = "A";
			}else if($per>60){
				$grade = "B";
			}else if($per>50){
				$grade = "PASS";
			}else{
			$grade = "FAIL";			
			}
	
	}else{
		$grade = "FAIL";	
		}
		}

if($eng_m>=0 && $urd_m>=0 && $mat_m>=0 && $phy_m>=0 && $che_m>=0){

if($eng_m<=$eng_t && $urd_m<=$urd_t && $mat_m<=$mat_t && $phy_m<=$phy_t && $che_m<=$che_t){
?>

<div id="data"><table>

<tr><th>Subjects</th><th>Total Marks</th><th>Obtain Marks</th><th>Percentage</th></tr>
<tr><td>English</td><td><?php echo $eng_t ?></td><td><?php echo $eng_m ?></td><td><?php echo $eng_p ?> %</td></tr>
<tr><td>Urdu</td><td><?php echo $urd_t ?></td><td><?php echo $urd_m ?></td><td><?php echo $urd_p ?> %</td></tr>
<tr><td>Maths</td><td><?php echo $mat_t ?></td><td><?php echo $mat_m ?></td><td><?php echo $mat_p ?> %</td></tr>
<tr><td>Physics</td><td><?php echo $phy_t ?></td><td><?php echo $phy_m ?></td><td><?php echo $phy_p ?> %</td></tr>
<tr><td>Chemistry</td><td><?php echo $che_t ?></td><td><?php echo $che_m ?></td><td><?php echo $che_p ?> %</td></tr>
</table></div>

<br>
Total Marks : <?php echo $total ?><br><br>
Obtain Marks : <?php echo $total_obtain ?><br><br>
Percentage : <?php echo $per ?><br><br>
Grade : <?php echo $grade ?>

<?php
}else{
	echo"Marks Cannot be Greater Then Total Marks.";
	}

}else{
	echo"Number Must be Positive.";
	
	}
	}
	}else{
	}	

?>


