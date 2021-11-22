<?php
//1. เชื่อมต่อ database:
include('cdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$sl_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT sl.*,t.type_name
FROM tbl_sl as sl 
INNER JOIN tbl_type as t ON sl.type_id = t.type_id
WHERE sl.sl_id = '$sl_id'
ORDER BY sl.type_id asc";
$result2 = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result2);
extract($row);

//2. query ข้อมูลจากตาราง 
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<div class="container">
    <div class="row">
        <form name="addsl" action="sl_form_edit_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-9">
                    <p> ชื่อทุน</p>
                    <input type="text" name="sl_name" class="form-control" required placeholder="ชื่อทุน" / value="<?php echo $sl_name; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <p> ประเภททุน </p>
                    <select name="type_id" class="form-control" required>
                        <option value="<?php echo $row["type_id"]; ?>">
                            <?php echo $row["type_name"]; ?>
                        </option>
                        <option value="type_id">ประเภททุน</option>
                        <?php foreach ($result as $results) { ?>
                            <option value="<?php echo $results["type_id"]; ?>">
                                <?php echo $results["type_name"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <p> รายละเอียดทุน </p>
                    <textarea name="sl_detail" rows="5" cols="60"><?php echo $sl_detail; ?>
             </textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <p> ภาพประกอบ</p>
                    <img src="sl_img/<?php echo $row['sl_img']; ?>" width="100px">
                    <br>
                    <br>
                    <input type="file" name="sl_img" id="sl_img" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="hidden" name="sl_id" value="<?php echo $sl_id; ?>" />
                    <input type="hidden" name="img2" value="<?php echo $sl_img; ?>" />
                    <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>

                </div>
            </div>
        </form>
    </div>
</div>