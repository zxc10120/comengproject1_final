<?php
include('cdb.php');

$a_user = $_POST['a_user'];
$a_pass = $_POST['a_pass'];
$a_name = $_POST['a_name'];
$check = "
	SELECT  a_user 
	FROM tbl_admin 
	WHERE a_user = '$a_user' 
	";
$result1 = mysqli_query($con, $check) or die(mysqli_error($con));
$num = mysqli_num_rows($result1);

if ($num > 0) {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ !');";
    echo "window.history.back();";
    echo "</script>";
} else {

    $sql = "INSERT INTO tbl_admin
    
    (a_user,  a_pass, a_name) 

    VALUES 

    ('$a_user', md5('$a_pass'), '$a_name')";

    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);
}
if ($result) {
    echo "<script>";
    echo "alert('Add Succesfuly');";
    echo "window.location ='admin.php'; ";
    echo "</script>";
} else {

    echo "<script>";
    echo "alert('ERROR!');";
    echo "window.location ='admin.php'; ";
    echo "</script>";
}
