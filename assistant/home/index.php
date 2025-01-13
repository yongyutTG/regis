<?php
include('../nav/index.php');
?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
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
</div>
<div class="col-md-4"></div>
</div>
	<p style="text-align: center;display: block;margin: auto;padding: 24px 36px 36px 36px;">
	<a href="../logout/" style="padding: 6px 24px;" class="btn btn-outline-danger"><img src="../../images/close.png" width="24"> ออกจากระบบ</a>
	</p>
<?php
include('../f.html');
?>