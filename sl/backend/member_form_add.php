<?php include('h.php'); ?>
<form name="register" action="member_form_add_db.php" method="POST" class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-5" align="left">
            <input name="m_user" type="text" required class="form-control" id="m_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5" align="left">
            <input name="m_pass" type="password" required class="form-control" id="m_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5" align="left">
            <input name="m_name" type="text" required class="form-control" id="m_name" placeholder="ชื่อ-สกุล " />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5" align="left">
            <input name="m_email" type="email" class="form-control" id="m_email" placeholder=" อีเมล์ name@email.com" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5" align="left">
            <input name="m_tel" type="text" class="form-control" id="m_tel" placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5" align="right">
            <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span>เพิ่ม</button>
        </div>
    </div>
</form>