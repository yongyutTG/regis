<?php
include('../navregister/index.php');
if(isset($_POST['submit'])){
$mid=trim($_POST['mid']);
$object->Verify($mid)
;
$_SESSION['mid']=$mid;
echo"<script>window.location.href = '../line/';</script>";
}
include('../f.html');
?>