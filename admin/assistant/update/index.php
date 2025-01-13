<?php
include('../navadmin/index.php');
$aid=trim($_POST['aid']);
$apname=trim($_POST['apname']);
$afname=trim($_POST['afname']);
$alname=trim($_POST['alname']);
$upass=trim($_POST['upass']);
$object->Updateassistant($aid,$apname,$afname,$alname,$upass);
echo"<script>window.location.href = '../';</script>";
?>