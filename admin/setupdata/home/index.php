<?php
include('../navsetupdata/index.php');
?>
<p style="text-align: center;display: block;margin: auto;padding: 6px 0px 12px 0px;">
<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_img<?php echo $row['sdid']; ?>" data-id=""><img src="../../../images/chpng.png" width="24"> เปลี่ยนรูปโลโก้</a>
</p>

<br>

<div style="text-align: center;">
<h4><b>ตั้งค่าข้อมูลพื้นฐาน</b></h4>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="table">

<table class="table table-bordered" style="width:100%">

<tr>
<td>ชื่อองค์กร/หน่วยงาน</td>
<td><?php echo $row['office'];?></td>
</tr>

<tr>
<td>ชื่อระบบ</td>
<td><?php echo $row['title'];?></td>
</tr>

<tr>
<td>Token Line Admin</td>
<td><?php echo $row['admin'];?></td>
</tr>

<tr>
<td>อีเมล์ระบบ</td>
<td><?php echo $row['rootmail'];?></td>
</tr>

<tr>
<td>Password อีเมล์ระบบ</td>
<td><?php echo $row['rootpass'];?></td>
</tr>

<tr>
<td>Host ส่งออกอีเมล์</td>
<td><?php echo $row['hostmail'];?></td>
</tr>

<tr>
<td>โดเมนเนม URL โปรเจค</td>
<td><?php echo $row['durl'];?></td>
</tr>

</table>

</div>
</div>
<div class="col-md-3"></div>
</div>
<div style="text-align:center;">
<h6>หมายเหตุ : อีเมล์ระบบควรสร้างจาก Hosting Domain ที่ใช้งานระบบจริง</h6>
<h6>ไม่แนะนำให้ใช้ Gmail ในการส่งเมล์ออกจากระบบ</h6>
</div>
<br>
<p style="text-align: center;display: block;margin: auto;padding: 0px 0px 6px 0px;">
<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalupdate<?php echo $row['sdid']; ?>" data-id=""><img src="../../../images/upd.png" width="24"> อัปเดทข้อมูล</a> 
<a href="../../" class="btn btn-primary"><img src="../../../images/mainmenu.png" width="24"> กลับหน้าหลัก</a>
</p>


<?php
include('../modalupdate/index.php');
include('../f.html');
?>