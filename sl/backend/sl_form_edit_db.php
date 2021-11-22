<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('cdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$sl_id = $_POST["sl_id"];
$sl_name = $_POST["sl_name"];
$type_id = $_POST["type_id"];
$sl_detail = $_POST["sl_detail"];
$sl_img = (isset($_POST['sl_img']) ? $_POST['sl_img'] : '');
$img2 = $_POST['img2'];
$upload = $_FILES['sl_img']['name'];
if ($upload != '') {

    //โฟลเดอร์ที่เก็บไฟล์
    $path = "sl_img/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES['sl_img']['name'], ".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand . $date1 . $type;

    $path_copy = $path . $newname;
    $path_link = "sl_img/" . $newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['sl_img']['tmp_name'], $path_copy);
} else {
    $newname = $img2;
}

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE tbl_sl SET  
			sl_name='$sl_name',
			type_id='$type_id', 
			sl_detail='$sl_detail',
			sl_img='$newname'
			WHERE sl_id='$sl_id' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfuly');";
    echo "window.location = 'sl.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
}
?>
<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$sl_id = $_POST["sl_id"];
$sl_name = $_POST["sl_name"];
$type_id = $_POST["type_id"];
$sl_detail = $_POST["sl_detail"];
$sl_img = (isset($_POST['sl_img']) ? $_POST['sl_img'] : '');
$img2 = $_POST['img2'];
$upload = $_FILES['sl_img']['name'];
if ($upload != '') {

    //โฟลเดอร์ที่เก็บไฟล์
    $path = "sl_img/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES['sl_img']['name'], ".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand . $date1 . $type;

    $path_copy = $path . $newname;
    $path_link = "sl_img/" . $newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['sl_img']['tmp_name'], $path_copy);
} else {
    $newname = $img2;
}

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE tbl_sl SET  
			sl_name='$sl_name',
			type_id='$type_id', 
			sl_detail='$sl_detail',
			sl_img='$newname'
			WHERE sl_id='$sl_id' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfuly');";
    echo "window.location = 'sl.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
}
?>