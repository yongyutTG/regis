<?php
include('../h.php');
$mid=$_SESSION['mid'];
$name=$_SESSION['name'];
if($_SESSION['mid']=='')
{
echo "<script>window.location='../logout/'</script>";
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<a class="navbar-brand" href="#" style="font-size: 16px;padding: 0px 6px 0px 12px;color: white;"><b>DashBoard<br>Member : <?php echo $_SESSION['name'] ?></b></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto topnav">
  <li class="nav-item">
  <a style="color: white;" class="nav-link active" aria-current="page" href="../logout/"> ออกจากระบบ</a>
  </li>
</ul>
</div>
</nav>
<div class="row">
<div class="col-md-12" style="text-align: center;display: block;margin: auto;padding: 6px 0px 0px 0px;">
  <img style="display: block;margin: auto;" src="../../images/<?php echo $rowsetup['img'];?>" height="100">
  <div style="text-align: center;padding: 12px 0px 12px 0px;">  
  <h4><?php echo $rowsetup['office'];?></h4>
  <h5><?php echo $rowsetup['title'];?></h5>
  </div>
</div>
</div>