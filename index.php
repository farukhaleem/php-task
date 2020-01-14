<?php

$return_data="";

if(isset($_POST['action']) && $_POST['action']=='insert'){
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$con = mysqli_connect("localhost","root","","msgdb");
	
	if(!empty($fname) && !empty($lname) && !empty($phone)){
		$query = "insert into pinfo(fname, lname, phone) values ('".$fname."','".$lname."','".$phone."')";
		
		$query_run = mysqli_query($con, $query);
		if($query_run!=NULL){
			
			$return_data= array("status" => true ,"messege"=>"Data insert Successfully.");
		
		}
	}else{
		
			$return_data= array("status" => false ,"messege"=>"All Feilds Required.");
		
	}
}else if(isset($_POST['action']) && $_POST['action']=='update'){
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$id = $_POST['id'];
	$con = mysqli_connect("localhost","root","","msgdb");
	
	$query = "update pinfo set fname='".$fname."' , lname='".$lname."' , phone='".$phone."' where pinfo.id = ".$id ;
	
	$query_run = mysqli_query($con, $query);
		if($query_run!=NULL){
			
			$return_data= array("status" => true ,"messege"=>"Data updated Successfully.");
		
		}else{
		
			$return_data= array("status" => false ,"messege"=>"All Feilds Required.");
		
		}
}else if(isset($_GET['action']) && $_GET['action']=='delete'){
	
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","msgdb");
	
	$query = "delete pinfo from pinfo WHERE id=".$id;
	
	$query_run = mysqli_query($con, $query);
		if($query_run!=NULL){
			
			$return_data= array("status" => true ,"messege"=>"Row = ".$id." Deleted.");
		
		}else{
		
			$return_data= array("status" => false ,"messege"=>"All Feilds Required.");
		
		}

}else if(isset($_POST['action']) && $_POST['action']=='fetch'){
	
	$id = $_POST['id'];
	
	if($id == NULL){
			$where = "";
		}else{
			$where = "WHERE id = ".$id;
			}
	
	$con = mysqli_connect("localhost","root","","msgdb");
	
	$query = "select * from pinfo ".$where;
	
	$query_run = mysqli_query($con, $query) ;
	
		if(mysqli_num_rows($query_run)){		
		while($display[] = mysqli_fetch_assoc($query_run)){
				
				$return_data=$display;			
				
			}
		}else{
	
		$return_data = 'No Data Found';
		}
	}


	
$result = json_encode($return_data);
echo $result;


?>