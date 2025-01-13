<?php
include('../navremember/index.php');
$mid=$_SESSION['mid'];
	if($_SESSION['mid']=='')
	{
	echo "<script>window.location='../../logout/'</script>";
	}
$resultmid=$object->Rdmember($mid);
foreach($resultmid as $row)
?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div style="text-align: center;padding: 0px 0px 6px 0px;">  
<h5><b>รายละเอียด</b></h5>
</div>
	<table class="table table-striped table-bordered" style="width:100%">
	<tr>
	<td>ชื่อ - สกุล</td>
	<td><?php echo $row['pname'] ?><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
	</tr>
	<tr>
	<td>ตำแหน่ง</td>
	<td><?php echo $row['clsname'] ?></td>
	</tr>
	<tr>
	<td>งาน/ฝ่าย</td>
	<td><?php echo $row['jobname'] ?> -- ฝ่าย<?php echo $row['depname'] ?></td>
	</tr>
	<tr>
	<td>รหัสผ่าน</td>
	<td><b><font color="red"><?php echo $row['pass'] ?></font></b></td>
	</tr>
	</table>
</div>
<div class="col-md-4"></div>
</div>
	<div style="text-align:center;padding: 6px 12px 6px 12px;">
	<h6><b><font color="red">สำคัญมาก</font></b> : โปรดจำรหัสผ่าน 6 หลัก ให้ได้เพื่อเข้าสู่ระบบในภายหลัง</h6>
	</div>
<p style="text-align: center;padding: 2px 0px 0px 0px;">
<a href="../../logout/" class="btn btn-outline-primary"><img src="../../../images/home.png" width="24"> กลับหน้าหลัก</a>
</p>
</form>
<?php
include '../f.html';
?>