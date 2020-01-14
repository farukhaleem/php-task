<form method="post" action="table.php">

Table Limit <input type="text" name="num1"><br>
Line Number <input type="text" name="num2"><br>
<input type="submit" name="btn">

</form>


<?php
if(isset($_POST['btn'])){

	
  $number = $_POST['num2'];
  $limit = $_POST['num1'];
  
  for($t = 2; $t<= $limit; $t++){ 
  
	  for($a = 1; $a <=$number; $a++)
	  echo  $t ." * ". $a ." = ". ($t*$a) ."<br>";
	  
  echo"<br>"."<br>";
  }

}
?>