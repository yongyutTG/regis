<?php
include('../navadmin/index.php');
	$cls=2;
	$apname=trim($_POST['apname']);
	$afname=trim($_POST['afname']);
	$alname=trim($_POST['alname']);
	$uname=trim($_POST['uname']);
	$upass=trim($_POST['upass']);
	$adminrecord=date("Y-m-d H:i:s");
		//
		$resultuname=$object->Checkuname($uname);
		if(count($resultuname)>0)
		{
		echo"<script>
		swal({
		title: 'ชื่อผู้ใช้งานนี้มีแล้วในระบบแล้ว',
		text: 'ตรวจสอบ',
		icon: 'warning'
		}).then(function() {
		// Redirect the user
		history.back();
		console.log('The Ok Button was clicked.');
		});
		</script>";
		exit();
		}
		//
	$object->Registerassistant($cls,$apname,$afname,$alname,$uname,$upass,$adminrecord);
	echo"<script>window.location='../';</script>";
include('../f.html');
?>