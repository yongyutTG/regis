<?php
session_start();
require("../db/login.php");
$object=new CRUD();
$uname=trim($_POST['uname']);
$upass=trim($_POST['upass']);
$res=$object->Loginadmin($uname,$upass);
if(count($res)>0){
foreach($res as $row){
if($row['cls']==1){
$_SESSION['aid']=$row['aid'];
$_SESSION['name']=$row['apname'].$row['afname'].' '.$row['alname'];
echo "<script type='text/javascript'>";
echo "window.location='../admin/';";
echo "</script>";
}
elseif($row['cls']==2){
$_SESSION['aid']=$row['aid'];
$_SESSION['name']=$row['apname'].$row['afname'].' '.$row['alname'];
echo "<script type='text/javascript'>";
echo "window.location='../assistant/';";
echo "</script>";
}
}
}
else
{
include('h.php'); 
echo"<script>
swal({
title: 'ไม่พบข้อมูล!',
text: 'ตรวจสอบชื่อผู้ใช้งานและรหัสผ่านให้ถูกต้อง',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
}
include('f.html');
?>