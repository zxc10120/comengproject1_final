<?php
$query_sl = "SELECT * FROM tbl_sl as sl
INNER JOIN tbl_type as t
ON sl.type_id = t.type_id
ORDER BY sl.sl_id ASC";
$result_sl = mysqli_query($con, $query_sl) or die("Error in query: $query_sl " . mysqli_error($con));
// echo($query_type);
// exit()
?>
<?php foreach ($result_sl as $row_sl) { ?>
    <div class="card mb-3">
        <img src="backend/sl_img/<?php echo $row_sl['sl_img']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row_sl['sl_name']; ?></h5>
            <p class="card-text">ประเภท: <?php echo $row_sl['type_name']; ?></p>
            <p class="card-text"><?php echo $row_sl['sl_detail']; ?></p>
            <a href="sl_detail.php?id=<?php echo $row_sl['sl_id'] ?>" class="btn btn-primary">รายละเอียด</a>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $row_sl['datesave']; ?></small></p>
        </div>
    </div>
<?php } ?>