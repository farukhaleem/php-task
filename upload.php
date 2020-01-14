<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
			
$file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$count = count($file); 

for($i= 0; $i < $count; $i++)
{
	$file_name = $_FILES['file']['name'][$i];	
	
	if(move_uploaded_file($_FILES['file']['tmp_name'][$i],"Upload/".$file_name)){
		
		$result = 1;
		
		}else{
			
		$result =  0;
		
		}
		if($result > 0){
			
			 $result = array('Status'=>'False','messege'=>'Images Uploaded Succesfully');
			}else{
			 $result = array('Status'=>'False','messege'=>'Images Uploaded Failed. Size Limit Exceed.');	
				}
				
	}
}
echo json_encode($result);

?>