<?php
include('mcss.php');
include('backend/cdb.php');
$sl_id = $_GET["id"];
?>
<!DOCTYPE html>
<html>

<head>

    <title>ระบบตรวจสอบทุนการศึกษา</title>
    <link rel="stylesheet" href="sidebar.css">

</head>

<body>


    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            สวัสดี <?php echo $m_name; ?>
            <div class="header_img"> <img src="avatar.png" alt=""></div>

        </header>
        <?php include('navbar.php'); ?>

        <div align="center">
            <div class="row">
                <?php
                $sql = "SELECT * FROM tbl_sl as sl 
              INNER JOIN tbl_type  as t ON sl.type_id=t.type_id 
               AND sl_id = $sl_id ";
                $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
                $row = mysqli_fetch_array($result);

                ?>
                <div class="col-md-10">
                    <div class="container" style="margin-top: 50px">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="polaroid">
                                    <?php echo "<img src='backend/sl_img/" . $row['sl_img'] . "'width='100%'>"; ?>
                                    <div class="container_di">
                                        <p><?php echo $row["sl_name"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 bg-light rounded-lg border border-primary">
                                <h3><b><?php echo $row["sl_name"]; ?></b></h3>
                                <p>
                                    ประเภท: <?php echo $row["type_name"]; ?>
                                </p>
                                <div class="card-body">
                                    <?php echo $row["sl_detail"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </body>

</html>
<style>
    div.polaroid {
        width: 80%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 25px;
    }

    div.container_di {
        text-align: center;
        padding: 10px 20px;
    }
</style>