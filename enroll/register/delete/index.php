<?php
include('../navregister/index.php');
if(isset($_POST['submit'])){
$mid=trim($_POST['mid']);
$object->Delete(
$mid
)
;
echo"<script>
swal({
title: 'ลบข้อมูลเรียบร้อย',
text: 'กลับหน้าหลัก',
icon: 'success'
}).then(function() {
// Redirect the user
window.location.href = '../../logout/';
console.log('The Ok Button was clicked.');
});
</script>";
}
include('../f.html');
?>