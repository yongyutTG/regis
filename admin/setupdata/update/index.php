<?php
include('../navsetupdata/index.php');
$sdid=trim($_POST['sdid']);
$office=trim($_POST['office']);
$title=trim($_POST['title']);
$admin=trim($_POST['admin']);
$rootmail=trim($_POST['rootmail']);
$rootpass=trim($_POST['rootpass']);
$hostmail=trim($_POST['hostmail']);
$durl=trim($_POST['durl']);
$object->Updatesetupdata($sdid,$office,$title,$admin,$rootmail,$rootpass,$hostmail,$durl);
echo"<script>window.location.href = '../';</script>";
include('../f.html');
?>