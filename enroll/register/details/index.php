<?php
include('../navregister/index.php');
$randomid=$_SESSION['randomid'];
	if($_SESSION['randomid']=='')
	{
	echo "<script>window.location='../../logout/'</script>";
	}
$resultrandomid=$object->Rdrandomid($randomid);
foreach($resultrandomid as $row)
?>
<input type="hidden"  name="mid" value="<?php echo $row['mid']; ?>" />
<div class="row" style="text-align: center;padding: 0px 6px 6px 6px;">
<div class="col-md-4"></div>
<div class="col-md-4">

<div>  
<h5><b>รายละเอียด</b></h5>
</div>

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
<div class="col-md-4"></div>
</div>

<div style="text-align:center;padding: 12px 6px;"><h6><b>ตรวจสอบข้อมูลให้ถูกต้อง <font color="red">โดยเฉพาะอีเมล์ เนื่องจากระบบจะส่ง password ให้ทางอีเมล์</font> หากพบว่าไม่ถูกต้องให้แก้ไขก่อนยืนยันข้อมูล</b></h6></div>

<p style="text-align: center;padding: 2px 0px 0px 0px;">
<a href="#" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modal_update<?php echo $row['mid']; ?>" data-id=""><img src="../../../images/upd.png" width="24"> แก้ไขข้อมูล</a>
<a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal_delete<?php echo $row['mid']; ?>" data-id=""><img src="../../../images/del.png" width="24"> ยกเลิก</a>
<a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal_verify<?php echo $row['mid']; ?>" data-id=""><img src="../../../images/accept.png" width="24"> ยืนยันข้อมูล</a>
</p>
<?php
include '../modal/index.php';
include '../f.html';
?>