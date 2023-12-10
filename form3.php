<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","vta","zoo");
//mysql_select_db("zoo",$con);

   $query="select* from zoodetails";
   $result=mysqli_query($con,$query);
   
   echo"<table border='1' width='100%'>
   <tr> <th width='5%'> ID </th>
   <th width='25%'> Name </th>
   <th width='20%'> Contact No </th>
   <th width='20%'> email </th>
   <th width='10%'> City </th>
   <th width='5%'> Age </th> </tr>";
   
	while($row = mysqli_fetch_array($result)){
      echo "<tr>";
	  echo "<td width='5%'>" .$row['rec_Id']. "</td>";
	  echo "<td width='25%'>".$row['Title']." ". $row['First_Name']." ". $row['Last_Name']. " </td>";
	  echo "<td width='20%'>" .$row['Contact_No']. "</td>";
	  echo "<td width='20%'>" .$row['Email']. "</td>";
	  echo "<td width='20%'>" .$row['City']. "</td>";
	  echo "<td width='20%'>" .$row['Age']. "</td>";
	  echo "</tr>";
}
	  echo "</table>";
//delete
echo"<form method='get' action='delete.php'>
<input type='submit' value='Delete'/>
<input type='text' name='rid'/>
</form>";

//Update
echo "<form id='form1' name='form1'  action='update.php' method='GET' >
<table width='288' border='1'>
  <tr>
    <td width='100'>Title</td>
    <td width='172'><input type='radio'  name='txt_title' value='Mr'  />Mr.<input type='radio' value='Mrs'  name='txt_title' id='txt_title' />Mrs.
    <input type='radio' value='Miss' name='txt_title' />Miss.</td>
  </tr>
  <tr>
    <td>First Name</td>
    <td><input type='text' name='txt_fname'  /></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type='text' name='txt_lname'  /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type='text' name='txt_email'  /></td>
  </tr>
  <tr>
    <td>Contact No</td>
    <td><input type='text' name='txt_contact'  /></td>
  </tr>
  <tr>
    <td>City</td>
    <td><select name='txt_city'><option value='Galle'>Galle</option><option value='Kandy'>Kandy</option><option value='Matara'>Matara</option></select></td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input type='text' name='txt_age'  /></td>
  </tr>
</table>
<input name='btn_submit' type='submit' value='update' /> <input type='text' name='rid' />

</form>";


?> 

</body>
</html>