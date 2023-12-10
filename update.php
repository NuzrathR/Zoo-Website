<?php


$rec_Id = $_GET['rid'];
$title = $_GET['txt_title'];
$fname = $_GET['txt_fname'];
$lname = $_GET['txt_lname'];
$email = $_GET['txt_email'];
$conno = $_GET['txt_contact'];
$city =  $_GET['txt_city'];
$age =  $_GET['txt_age'];


$con=@mysql_connect("localhost","root","");
mysql_select_db("zoo",$con);


$query = "UPDATE zoodetails SET Title='$title',First_Name='$fname',Last_Name='$lname',Email='$email',Contact_No='$conno',City='$city',Age='$age' WHERE rec_Id='$rec_Id' ";
	


if(mysql_query($query))     {
	
	echo "Updated!";
	header('Location:form3.php');
}
else{
	echo "error";
}


?>