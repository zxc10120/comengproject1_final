<?php
//1. เชื่อมต่อ database:
include('cdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง 
$query = "
SELECT * FROM tbl_sl as sl 
INNER JOIN tbl_type  as t ON sl.type_id=t.type_id 
ORDER BY sl.sl_id DESC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
$row_am = mysqli_fetch_assoc($result);
?>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            "aaSorting": [
                [0, 'ASC']
            ],
            //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
        });
    });
</script>
<table border="2" class="display table table-bordered" id="example1" align="center">
    <thead>
        <tr class="info">
            <th width='5%'>id</th>
            <th width='25%'>type</th>
            <th width='15%'>name</th>
            <th width='25%'>img</th>
            <th width='5'>edit</th>
            <th widith='5'>delete</th>
        </tr>
    </thead>
    <?php do { ?>

        <tr>
            <td><?php echo $row_am['sl_id']; ?></td>
            <td><?php echo $row_am['type_name']; ?></td>
            <td><?php echo $row_am['sl_name']; ?></td>
            <td align=center><img src='sl_img/<?php echo $row_am['sl_img']; ?>' width='100'></td>
            <td><a href="sl.php?act=edit&ID=<?php echo $row_am['sl_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
            <td><a href="sl_del_db.php?ID=<?php echo $row_am['sl_id']; ?>" class='btn btn-danger btn-xs' onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
        </tr>

    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>

</table>