
<!-- Modal -UPDATE- -->
<div class="modal fade" id="modal_update<?php echo $row['mid']; ?>" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div style="text-align: center;padding: 24px 0px 12px 0px;background-color: #f1c217;color: #000000;">
<h3><b>แก้ไขข้อมูล</b></h3>
</div>

<div class="modal-content">
<form action="../update/" method="post">
<input type="hidden"  name="mid" value="<?php echo $row['mid'] ?>"/>
<div class="row" style="padding: 24px 36px 6px 36px;">
	
	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">คำนำหน้า</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<select name="pname" class="form-select" required>
	<option value="<?php echo $row['pname']?>"><?php echo $row['pname']?></option>
	<option value="นาย">นาย</option>
	<option value="นาง">นาง</option>
	<option value="นางสาว">นางสาว</option>
	</select>
	</div>
	</div>
	</div>

	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ชื่อ</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text"  name="fname" class="form-control" value="<?php echo $row['fname']?>">
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">นามสกุล</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text"  name="lname" class="form-control" value="<?php echo $row['lname']?>">
	</div>
	</div>
	</div>
	</div>
	</div>

	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">อีเมล์</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="mb-3">
	<div class="row">
	<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">เบอร์โทร</span></div>
	<div class="col-md-8" style="padding:0px 0px;">
	<div class="form-group">
	<div class="input-group">
	<input type="text" name="tel" class="form-control" value="<?php echo $row['tel']?>" maxlength="10" disabled>
	</div>
	</div>
	</div>
	</div>
	</div>
</div>
	<p style="text-align: center;padding:6px 0px 12px 0px;">
	<button type="submit" name="submit" class="btn btn-outline-warning">
	<img src="../../../images/accept.png" width="24">  ยืนยันปรับแก้</button>
	<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><img src="../../../images/close.png" width="24"> ปิด</button>
	</p>
</form>
</div>
</div>
</div>
<!--CLOSE Modal UPDATE-REGISTER -->

<!-- Modal - DELETE -->
<div class="modal fade" id="modal_delete<?php echo $row['mid']; ?>" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div style="text-align: center;padding: 24px 0px 12px 0px;background-color: red;color: white;">
<h3><b>ลบข้อมูล</b></h3>
</div>

<div class="modal-content">
<form action="../delete/" method="post">
<input type="hidden"  name="mid" value="<?php echo $row['mid'] ?>"/>
<div class="row" style="padding: 24px 36px 6px 36px;">
	
	<table class="table table-striped table-bordered" style="width:100%">
	<tr>
	<td>ชื่อ - สกุล</td>
	<td><?php echo $row['pname'] ?><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
	</tr>
	
	<tr>
	<td>อีเมล์</td>
	<td><?php echo $row['email'] ?></td>
	</tr>
	
	<tr>
	<td>เบอร์โทร</td>
	<td><?php echo $row['tel'] ?></td>
	</tr>
</table>
</div>
	<p style="text-align: center;padding:6px 0px 12px 0px;">
	<button type="submit" name="submit" class="btn btn-outline-danger">
	<img src="../../../images/accept.png" width="24"> ยืนยันลบ</button>
	<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><img src="../../../images/close.png" width="24"> ปิด</button>
	</p>
</form>
</div>
</div>
</div>
<!--ปิด Modal DELETE-->

<!-- Modal - VERIFY -->
<div class="modal fade" id="modal_verify<?php echo $row['mid']; ?>" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div style="text-align: center;padding: 24px 0px 12px 0px;background-color: blue;color: white;">
<h3><b>ยืนยันข้อมูล</b></h3>
</div>

<div class="modal-content">
<form action="../verify/" method="post">
<input type="hidden" name="mid" value="<?php echo $row['mid'] ?>"/>
<div class="row" style="padding: 24px 36px 6px 36px;">
	
	<table class="table table-striped table-bordered" style="width:100%">
	<tr>
	<td>ชื่อ - สกุล</td>
	<td><?php echo $row['pname'] ?><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
	</tr>
	
	<tr>
	<td>อีเมล์</td>
	<td><?php echo $row['email'] ?></td>
	</tr>
	
	<tr>
	<td>เบอร์โทร</td>
	<td><?php echo $row['tel'] ?></td>
	</tr>
</table>
</div>
	<div style="text-align:center;padding: 12px 6px;"><h6><b>หลังจากยืนยันข้อมูล <font color="red">ระบบจะส่ง password ให้ทางอีเมล์</font> หากไม่พบให้ตรวจสอบในอีเมล์ขยะ Junk Mail</b></h6></div>
	<p style="text-align: center;padding:6px 0px 12px 0px;">
	<button type="submit" name="submit" class="btn btn-outline-primary">
	<img src="../../../images/accept.png" width="24"> ยืนยัน</button>
	<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><img src="../../../images/close.png" width="24"> ปิด</button>
	</p>
</form>
</div>
</div>
</div>
<!--ปิด Modal VERIFY-->


