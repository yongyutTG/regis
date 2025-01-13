<?php
include('../navrefresh/index.php');
?>
<form action="../ck/" method="post">
<div class="row">
<div class="col-md-4"></div>
	<div class="col-md-4">
	<div class="row" style="padding: 12px 24px 12px 24px; border-radius: 12px;background-color: #FFFFFF;">
	<div class="col-md-12">
	<div style="padding: 6px 0px 12px 0px;">
	<h5 style="text-align: center;"><b>เปลี่ยนรหัสผ่าน</b></h5>
	</div>
	</div>

	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ระบุอีเมล์ที่ลงทะเบียน</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text" name="email" class="form-control" placeholder="" required>
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ระบุรหัสผ่านเดิม</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text" name="password" class="form-control" placeholder="" maxlength="6" required>
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">กำหนดรหัสผ่านใหม่</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text" name="newpassword" class="form-control" placeholder="" maxlength="6" required>
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ยืนยันรหัสผ่านใหม่</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="password" name="newpassword_" class="form-control" placeholder="" maxlength="6" required>
	</div>
	</div>
	</div>
	</div>
	</div>

</div>
</div>
<div class="col-md-4"></div>
</div>
	<p style="text-align: center;">
	<button type="submit" name="submit" id="submit" class="btn btn-outline-primary">
	<img src="../../../images/accept.png" width="24"> บันทึก</button>
	<a href="../../../" class="btn btn-outline-warning"><img src="../../../images/can.png" width="24"> ยกเลิก</a>
	</p>
</form>
<?php
include('../f.html');
?>