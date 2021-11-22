<?php
include('mcss.php');
include('backend/cdb.php');
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
            <h2>&nbsp;อัพเดทข่าวสารทุนการศึกษา</h2>
            <h3>&nbsp;นักศึกษาสามารถติดตามข่าวสารเกี่ยวกับทุนศึกษาได้ตามลิ้งค์ด้านล่างนี้</h3>
            <div class="row">
                <div class="col-md-2">
                    <?php include('typesl.php'); ?>
                </div>
                <div class="col-md-10">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        $act = (isset($_GET['act']) ? $_GET['act'] : '');
                        if ($act == 'showbytype') {
                            include('showsl_type.php');
                        } else {
                            include('showsl.php');
                        }

                        ?>
                    </div>
                </div>
            </div>

    </body>

</html>