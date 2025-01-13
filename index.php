<?php
require ('db/admin.php');
$object=new CRUD();
$resultsetup=$object->Rdsetup();
foreach($resultsetup as $row);
?>
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- SWEET ALERT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Noto Sans Thai|Chonburi|Mitr|Prompt" rel="stylesheet">
  <!-- jquery -->
        <script
          src="https://code.jquery.com/jquery-3.5.1.js"
          integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
          crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- DATATABLE -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
      <script src=https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js></script>
      <script src=https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js></script>
      <script src=https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js></script>
      <script src=https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
      <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
      <script src=https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
      <script src=https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js></script>
      <script src=https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js></script>
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/<?php echo $row['img'];?>"/>
  <!-- Web Name -->
  <title><?php echo $row['office'];?></title>
</head>
  <style type="text/css">
  body{
      font-family:Noto Sans Thai,Prompt,sans-serif;
      background:#FFFFFF;
      }
      tr th{
      text-align: center;
      }
      tr td{
      text-align: justify;
      }
      .col-md-4 a:link {
			color: black;
			}
			/* visited link */
			.col-md-4 a:visited {
			color: black;
			}
			/* mouse over link */
			.col-md-4 a:hover {
			color: blue;
			}
			/* selected link */
			.col-md-4 a:active {
			color: red;
			}
  </style>
<body>
<div class="row">
	<div class="col-md-12" style="text-align: center;display: block;margin: auto;padding: 6px 12px 0px 12px;">
	<!-- <img style="display: block;margin: auto;" src="images/<?php echo $row['img'];?>" height="100"> -->
	<div style="text-align: center;padding: 12px 0px 12px 0px;">  
	<h4><?php echo $row['office'];?></h4>
	<h5><?php echo $row['title'];?></h5>
	</div>
	<h5 style="text-align: center;"><b>เข้าสู่ระบบ</b></h5>
	<form action="checkmember/" method="post">
	<div class="row" style="padding:12px 12px 12px 12px;" >
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="input-group mb-3">
		<span class="input-group-text">Username</span>
		<input type="text" autocapitalize="off" name="tel" class="form-control" placeholder="ระบุเบอร์โทร 10 หลัก" maxlength="10" required>
		</div>

		<div class="input-group mb-3">
		<span class="input-group-text">Password&nbsp;</span>
		<input type="password" autocapitalize="off" name="password" class="form-control" placeholder="ระบุรหัสผ่านเลข 6 หลัก" maxlength="6" required>
		</div>
		</div>
		<div class="col-md-4"></div>
	</div>
		<div style="text-align: center;display: block;margin: auto;padding: 0px 0px 12px 0px;">
		<button style="padding: 6px 36px 6px 36px;color: black;" type="submit" class="btn btn-outline-primary"><img src="images/accept.png" height="24"> ยืนยัน</button>
		</div>
	</form>
	<hr>
	<div class="row" style="padding:24px 0px 24px 0px;">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="row" style="text-align:center;">
		<!--<div class="col-md-4"><a href="#" data-bs-toggle="modal" data-bs-target="#modalregis" data-id="">ลงทะเบียน</a></div>-->
		<div class="col-md-4"><a href="enroll/register/">ลงทะเบียน</a></div>
		<div class="col-md-4"><a href="enroll/remember/">ลืมรหัสผ่าน</a></div>
		<div class="col-md-4"><a href="enroll/refresh/">เปลี่ยนรหัสผ่าน</a></div>
		</div>
		</div>
	<div class="col-md-4"></div>
</div>
</div>
</div>

	<div style="text-align: center;display: block;margin: auto;padding:24px 0px 12px 0px;">
	<a style="text-align: center;padding: 6px 12px;" href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#adminlogin" data-id=""><img src="images/login.png" width="24"> Admin Login</a>
	</div>

<!-- Modal - Login -->
<div class="modal fade" id="adminlogin" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

	<div style="text-align: center;padding: 24px 0px 6px 0px;background-color:red;color:white;">
	<h3><b>แบบฟอร์ม Admin Login</b></h3>
	</div>

<form action="checkadmin/" method="post">
	<div class="row" style="padding:12px 12px 12px 12px;" >
	<div style="text-align: center;display: block;margin: auto;padding:24px 0px 12px 0px;">
	<h5><b>เข้าสู่ระบบ</b></h5>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-10">
	<div class="input-group mb-3">
	<span class="input-group-text">Username</span>
	<input type="text" autocapitalize="off" name="uname" class="form-control" placeholder="ระบุ username" required>
	</div>

	<div class="input-group mb-3">
	<span class="input-group-text">Password&nbsp;</span>
	<input type="password" autocapitalize="off" name="upass" class="form-control" placeholder="ระบุ password" required>
	</div>
	</div>
	<div class="col-md-1"></div>
	</div>
               
	<div style="text-align: center;display: block;margin: auto;padding:6px 0px 36px 0px;">
	<button style="padding: 6px 36px 6px 36px;color: black;" type="submit" class="btn btn-outline-primary"><img src="images/accept.png" height="24"> ยืนยัน</button>
	<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><img src="images/close.png" width="24"> ปิด</button>
	</div>

</form>
</div>
                           
</div>
</div>
</div>
<!--CLOSE Modal-Login -->

<!-- JS, Popper.js, and jQuery -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	</body>
</html>