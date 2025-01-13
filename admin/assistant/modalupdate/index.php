<!-- Bootstrap Modals -->
<!-- Modal -UPDATE- -->
<div class="modal fade" id="modalupdate<?php echo $row['aid']; ?>" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel"><b>แก้ไขข้อมูลผู้ช่วยดูแลระบบ</b></h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
	<div class="modal-body">
			<form action="../update/" method="post">
			<?php $aid=$row['aid'];?>
			<input type="hidden"  name="aid" value="<?php echo $aid; ?>"/>
			<div class="row" style="padding:12px 12px 6px 12px;">
			<div class="col-md-12">
			<h5 style="text-align:center;">แบบฟอร์มแก้ไขข้อมูล</h5>
	
			<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">คำนำหน้า</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<select name="apname" class="form-select" required>
				<option selected value="<?php echo $row['apname']?>"><?php echo $row['apname']?></option>
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
				<input type="text"  name="afname" class="form-control" value="<?php echo $row['afname']?>">
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
				<input type="text"  name="alname" class="form-control" value="<?php echo $row['alname']?>">
				</div>
				</div>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">Username</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text"  name="uname" class="form-control" value="<?php echo $row['uname']?>" disabled>
				</div>
				</div>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">Password</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text"  name="upass" class="form-control" value="<?php echo $row['upass']?>">
				</div>
				</div>
				</div>
				</div>
				</div>

				</div>
				</div>
					<div class="text-center">
					<button type="submit" class="btn btn-outline-warning"><img src="../../../images/accept.png" width="24"> อัปเดท</button>
					</div>
				</form>
	</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-light" data-bs-dismiss="modal"><img src="../../../images/close.png" width="24"> ปิด</button>
			</div>
	</div>
	</div>
</div>
<!--CLOSE Modal UPDATE-REGISTER -->