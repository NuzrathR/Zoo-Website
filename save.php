<?php

$title=$_POST['t'];
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$email=$_POST['email'];
$conno=$_POST['con'];
$city=$_POST['city'];
$age=$_POST['age'];


$con=mysqli_connect("localhost","root","","zoo");

$query="insert into zoodetails(Title,First_Name,Last_Name,Email,Contact_No,City,Age)
values('$title','$fname','$lname','$email','$conno','$city','$age')";

if(mysqli_query($con,$query))
{
echo "done";
}
else
{
echo "error";
}

?>

