<?php include('h.php'); ?>
<div class="container">
    <p> </p>
    <div class="row">
        <div class="col-md-12">
            <form name="type" action="type_form_add_db.php" method="POST" id="type" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-6" align="left">
                        <input name="type_name" type="text" required class="form-control" id="type_name" placeholder="ประเภททุน" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
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