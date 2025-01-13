<?php
include('../navadmin/index.php');
//if(isset($_POST['submit'])){
$aid=trim($_POST['aid']);
$object->Deleteadmin($aid);
echo"<script>window.location.href = '../';</script>";
//}
include('../f.html');
?>