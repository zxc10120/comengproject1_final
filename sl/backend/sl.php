<!DOCTYPE html>
<html>

<head>
    <?php include('h.php');
    error_reporting(0);
    ?>

    <head>

    <body>
        <div class="container">
            <?php include('navbar.php'); ?>
            <p></p>
            <div class="row">
                <div class="col-md-3">
                    <?php include('menu_left.php'); ?>

                </div>
                <div class="col-md-9">
                    <a href="sl.php?act=add" class="btn-info btn-sm">Add</a>
                    <p></p>

                    <?php
                    $act = $_GET['act'];
                    if ($act == 'add') {
                        include('sl_form_add.php');
                    } elseif ($act == 'edit') {
                        include('sl_form_edit.php');
                    } else {
                        include('sl_list.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>

</html>