<meta charset="UTF-8">
<?php
include('cdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());
//รับค่าไฟล์จากฟอร์ม
$sl_name = $_POST['sl_name'];
$type_id = $_POST['type_id'];
$sl_detail = $_POST['sl_detail'];
$sl_img = (isset($_POST['sl_img']) ? $_POST['sl_img'] : '');
//img
$upload = $_FILES['sl_img'];
if ($upload <> '') {

    //โฟลเดอร์ที่เก็บไฟล์
    $path = "sl_img/";
    //ตัวขื่อกับนามสกุลภาพออกจากกัน
    $type = strrchr($_FILES['sl_img']['name'], ".");
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = 'sl_img' . $numrand . $date1 . $type;
    $path_copy = $path . $newname;
    $path_link = "sl_img/" . $newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['sl_img']['tmp_name'], $path_copy);
}
// เพิ่มไฟล์เข้าไปในตาราง uploadfile

$sql = "INSERT INTO tbl_sl
		(
		sl_name,
		type_id,
		sl_detail,
		sl_img
		)
		VALUES
		(
		'$sl_name',
		'$type_id',
		'$sl_detail',
		'$newname')";

$result = mysqli_query($con, $sql); // or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con);
// javascript แสดงการ upload file


if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Add Succesfuly');";
    echo "window.location = 'sl.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "window.location = 'sl.php'; ";
    echo "</script>";
}
?>