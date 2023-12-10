<<?php
//Store the values recived from url
$user_name = $_GET['username_para'];
$user_pws = $_GET['password_para'];

$con=mysql_connect("localhost","root","");
mysql_select_db("zoo",$con);


	$query = "SELECT * FROM userlogin WHERE user_name='$user_name' and pwd='$user_pws'";
	$result = mysql_query($query);
	//read the quried result 
	$row = mysql_fetch_array($result);	
	$count = mysql_num_rows($result);



//echo $row['user_name'];
if ($count == 1){
	
	if($user_name == 'admin'){
		header('Location: view_data.php');
	}
	else{
		header('Location: form_data.html');
	}
	
}
else{
	header('Location: errorpage.php');
}


?>
