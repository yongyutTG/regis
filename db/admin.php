<?php

require __DIR__ . '/connection.php';


class CRUD
{

//เชื่อมต่อฐานข้อมูล
protected $db;
function __construct()
{
$this->db = DB();
}

//ยกเลิกการเชื่อมต่อฐานข้อมูล
function __destruct()
{
$this->db = null;
}

//********************************** Read Data **********************************

//***********************อ่านข้อมูล การตั้งค่า
public function Rdsetup()
	{
	$query = $this->db->prepare("SELECT * FROM setupdata WHERE sdid=1");
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//**********************อ่านข้อมูลสมาชิก
	public function Member(){
		$query = $this->db->prepare("SELECT * FROM(member) WHERE chk=0 ORDER BY dateupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}

//ตรวจสอบ Admin Username ซ้ำ
	public function Checkuname($uname)
	{
	$query = $this->db->prepare(" SELECT * FROM admin WHERE uname=:uname AND chk=0");
	$query->bindParam("uname", $uname, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//ตรวจสอบเบอร์โทรซ้ำ
	public function Checktel($tel)
	{
	$query = $this->db->prepare(" SELECT * FROM member WHERE tel=:tel AND chk=0");
	$query->bindParam("tel", $tel, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//ตรวจสอบอีเมล์ซ้ำ
	public function Checkemail($email)
	{
	$query = $this->db->prepare(" SELECT * FROM member WHERE email=:email AND chk=0");
	$query->bindParam("email", $email, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}
	
//***********************อ่านข้อมูล ผู้ดูแลระบบ
	public function Administrator(){
		$query = $this->db->prepare("SELECT * FROM admin WHERE cls!=1 AND chk=0 ORDER BY adminupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//member Register
	public function Registermember($pname,$fname,$lname,$email,$tel,$chk,$password,$ip,$daterecord){
	$query = $this->db->prepare("INSERT INTO member(pname,fname,lname,email,tel,chk,password,ip,daterecord)VALUES(:pname,:fname,:lname,:email,:tel,:chk,:password,:ip,:daterecord)");
	$query->bindParam("pname", $pname, PDO::PARAM_STR);
	$query->bindParam("fname", $fname, PDO::PARAM_STR);
	$query->bindParam("lname", $lname, PDO::PARAM_STR);
	$query->bindParam("email", $email, PDO::PARAM_STR);
	$query->bindParam("tel", $tel, PDO::PARAM_STR);
	$query->bindParam("chk", $chk, PDO::PARAM_INT);
	$query->bindParam("password", $password, PDO::PARAM_STR);
	$query->bindParam("ip", $ip, PDO::PARAM_STR);
	$query->bindParam("daterecord", $daterecord, PDO::PARAM_STR);
	$query->execute();
	return $this->db->lastInsertId();
	}

//*****************************เพิ่มข้อมูล Assistant
	public function Registerassistant($cls,$apname,$afname,$alname,$uname,$upass,$adminrecord)
	{
	$query = $this->db->prepare("INSERT INTO admin(cls,apname,afname,alname,uname,upass,adminrecord)VALUES(:cls,:apname,:afname,:alname,:uname,:upass,:adminrecord)");
	$query->bindParam("cls", $cls, PDO::PARAM_STR);
	$query->bindParam("apname", $apname, PDO::PARAM_STR);
	$query->bindParam("afname", $afname, PDO::PARAM_STR);
	$query->bindParam("alname", $alname, PDO::PARAM_STR);
	$query->bindParam("uname", $uname, PDO::PARAM_STR);
	$query->bindParam("upass", $upass, PDO::PARAM_STR);
	$query->bindParam("adminrecord", $adminrecord, PDO::PARAM_STR);
	$query->execute();
	return $this->db->lastInsertId();
	}
	
//**********************อัปเดทMember
	public function Updatemember($mid,$pname,$fname,$lname)
	{
	$query = $this->db->prepare("UPDATE member SET pname=:pname,fname=:fname,lname=:lname WHERE mid=:mid");
	$query->bindParam("mid", $mid, PDO::PARAM_INT);
	$query->bindParam("pname", $pname, PDO::PARAM_STR);
	$query->bindParam("fname", $fname, PDO::PARAM_STR);
	$query->bindParam("lname", $lname, PDO::PARAM_STR);
	$query->execute();
	}

//******************************ลบข้อมูลMember
	public function Deletemember($mid)
	{
	$query = $this->db->prepare("UPDATE member SET chk=1 WHERE mid=:mid")
	;
	$query->bindParam("mid", $mid, PDO::PARAM_INT);
	$query->execute();
	}

//**********************อัปเดทAssistant
	public function Updateassistant($aid,$apname,$afname,$alname,$upass)
	{
	$query = $this->db->prepare("UPDATE admin SET apname=:apname,afname=:afname,alname=:alname,upass=:upass WHERE aid=:aid");
	$query->bindParam("aid", $aid, PDO::PARAM_INT);
	$query->bindParam("apname", $apname, PDO::PARAM_STR);
	$query->bindParam("afname", $afname, PDO::PARAM_STR);
	$query->bindParam("alname", $alname, PDO::PARAM_STR);
	$query->bindParam("upass", $upass, PDO::PARAM_STR);
	$query->execute();
	}
	
//**********************อัปเดทUpdatesetupdata
	public function Updatesetupdata($sdid,$office,$title,$admin,$rootmail,$rootpass,$hostmail,$durl)
	{
	$query = $this->db->prepare("UPDATE setupdata SET office=:office,title=:title,admin=:admin,rootmail=:rootmail,rootpass=:rootpass,hostmail=:hostmail,durl=:durl WHERE sdid=:sdid");
	$query->bindParam("sdid", $sdid, PDO::PARAM_INT);
	$query->bindParam("office", $office, PDO::PARAM_STR);
	$query->bindParam("title", $title, PDO::PARAM_STR);
	$query->bindParam("admin", $admin, PDO::PARAM_STR);
	$query->bindParam("rootmail", $rootmail, PDO::PARAM_STR);
	$query->bindParam("rootpass", $rootpass, PDO::PARAM_STR);
	$query->bindParam("hostmail", $hostmail, PDO::PARAM_STR);
	$query->bindParam("durl", $durl, PDO::PARAM_STR);
	$query->execute();
	}
	
//**********************อัปเดทUpimg
	public function Upimg($sdid,$newname)
	{
	$query = $this->db->prepare("UPDATE setupdata SET img=:newname WHERE sdid=:sdid");
	$query->bindParam("sdid", $sdid, PDO::PARAM_INT);
	$query->bindParam("newname", $newname, PDO::PARAM_STR);
	$query->execute();
	}

//******************************ลบข้อมูลAdministrator
	public function Deleteadmin($aid)
	{
	$query = $this->db->prepare("UPDATE admin SET chk=1	WHERE aid=:aid")
	;
	$query->bindParam("aid", $aid, PDO::PARAM_INT);
	$query->execute();
	}

}
?>
