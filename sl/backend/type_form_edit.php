<?php
//1. เชื่อมต่อ database:
include('cdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$type_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('h.php'); ?>
<div class="container">
    <p> </p>
    <div class="row">
        <div class="col-md-12">
            <form name="type" action="type_form_edit_db.php" method="POST" id="type" class="form-horizontal">
                <input type="hidden" name="type_id" value="<?php echo $type_id; ?>" />
                <div class="form-group">
                    <div class="col-sm-6" align="left">
                        <input name="type_name" type="text" required class="form-control" id="type_name" value="<?= $type_name; ?>" placeholder="ประเถทสินค้า" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6" align="right">
                        <button type="submit" class="btn btn-success btn-sm" id="btn"> บันทึก </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>