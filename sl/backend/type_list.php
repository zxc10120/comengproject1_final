 <?php
  include('h.php');
  //1. เชื่อมต่อ database:
  include('cdb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //2. query ข้อมูลจากตาราง tb_admin:
  $query = "SELECT * FROM tbl_type ORDER BY type_id ASC" or die("Error:" . mysqli_error($con));
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
       <th>id</th>
       <th>type</th>
       <th>edit</th>
       <th>delete</th>
     </tr>
   </thead>
   <?php do { ?>

     <tr>
       <td><?php echo $row_am['type_id']; ?></td>
       <td><?php echo $row_am['type_name']; ?></td>
       <td><a href="type.php?act=edit&ID=<?php echo $row_am['type_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
       <td><a href="type_del_db.php?ID=<?php echo $row_am['type_id']; ?>" class='btn btn-danger btn-xs' onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
     </tr>

   <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>

 </table>