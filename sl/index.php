<?php session_start(); ?>
<?php
include('h.php');
error_reporting(0);
?>
<style type="text/css">
    #btn {
        width: 100%;
    }
</style>
<div class="container" style="padding-top:100px">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-color:#D6EAF8">
            <h3 align="center">
                <span class="glyphicon glyphicon-lock"> </span>
                กรุณาเข้าสู่ระบบ
            </h3>
            <div class="form-group">
                <div class="col-sm-20" align="center">
                    <a href="admin/admin.php" class="btn btn-success">
                        <span class="glyphicon glyphicon-log-in"> </span>
                        Admin Login</a>
                    <p></p>
                    <a href="member_login.php" class="btn btn-info">
                        <span class="glyphicon glyphicon-log-in"> </span>
                        Member Login</a>
                </div>
            </div>
            <p align='center'></p>
        </div>
    </div>
</div>