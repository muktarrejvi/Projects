<?php
//conecting the database
$connection = mysql_connect("localhost", "root", "");
if (!$connection) {
	die("database connection failed:" . mysql_error());
}

//selecting the database
$dbselect = mysql_select_db("dbstudent", $connection);
if (!$dbselect) {
	die("Wrong database selected" . mysql_error());
}
?>

<?php
$stdntname=$_POST['name'];
$fname=$_POST['fname'];
$foccu=$_POST['foccu'];
$adds=$_POST['addrs'];
$fmob=$_POST['fmob'];
$smob=$_POST['smob'];
$hscl=$_POST['hname'];
$collg=$_POST['cname'];
$sscrslt=$_POST['sscgpa'];
$hscrslt=$_POST['hscgpa'];
$aca=$_POST['h1'];
//$addm=$_POST['e1'];
$batch=$_POST['b1'];
$ptype=$_POST['s']
?>

<?php

$query = "INSERT INTO ssc (Name, Fathers_Name, Adress, Father_Occupation, Student_Mobile_No, Fathers_Mobile_No, SSC, HSC, batch, batch_day, Payment_type,High_school,College) VALUES
('{$stdntname}','{$fname}','{$adds}','{$foccu}',{$smob},{$fmob},'{$sscrslt}','{$hscrslt}','{$aca}','{$batch}','{$ptype}','{$hscl}','{$collg}')";

if(!mysql_query($query, $connection)){
	echo "Fill all the form";
}
else{
mysql_close($connection);
	require 'succesful.html';
}
?>



