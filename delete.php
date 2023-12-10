

<?php


$recordid = $_GET['rid'];
$con = mysqli_connect("localhost","root","","zoo");
//mysql_select_db("zoo",$con);

$query="Delete from zoodetails where rec_Id ='$recordid'";

if(mysqli_query($con,$query))
{
	header('Location:form3.php');
}
else{
	echo"error".$recordid;
}
?>

