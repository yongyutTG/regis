<?php
include('../nav/index.php');
?>
<div class="row">
<div class="container" style="padding:0px 36px 24px 36px;">
<div class="col-md-12">
<div class="row row-cols-1 row-cols-md-2 g-1">

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>สมาชิก</b></h5></p>
	<p class="card-text"><img src="../../images/01.png" height="40"><h5>จำนวน <?php echo count($resultmember);?> คน</h5></p>
	<p><a href="../member/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>ตั้งค่าระบบ</b></h5></p>
	<p class="card-text"><img src="../../images/setup.png" height="40"><h5>จำนวน 7 รายการ</h5></p>
	<p><a href="../setupdata/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>
</div>
</div>
</div>
</div>
	<p style="text-align: center;display: block;margin: auto;padding: 0px 36px 36px 36px;">
	<a href="../logout/" style="padding: 6px 24px;" class="btn btn-outline-danger"><img src="../../images/close.png" width="24"> ออกจากระบบ</a>
	</p>
<?php
include('../f.html');
?>