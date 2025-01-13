<?php
include('../navmember/index.php');
$mid=trim($_POST['mid']);
$pname=trim($_POST['pname']);
$fname=trim($_POST['fname']);
$lname=trim($_POST['lname']);
$object->Updatemember($mid,$pname,$fname,$lname);
echo"<script>window.location.href = '../';</script>";
?>