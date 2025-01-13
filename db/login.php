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
//*********************************MEMBER****************************************

//*********************************Admin****************************************
	//ตรวจสอบการเข้าระบบของ admin
	public function Loginadmin($uname,$upass)
	{
	$query = $this->db->prepare("SELECT * FROM admin WHERE uname=:uname AND upass=:upass");
	$query->bindParam("uname", $uname, PDO::PARAM_STR);
	$query->bindParam("upass", $upass, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//*********************************Member****************************************
	//ตรวจสอบการเข้าระบบของสมาชิก
	public function Loginmember($tel,$pass)
	{
	$query = $this->db->prepare("SELECT * FROM member WHERE tel=:tel AND pass=:pass AND chk=2");
	$query->bindParam("tel", $tel, PDO::PARAM_STR);
	$query->bindParam("pass", $pass, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//ตรวจสอบการเข้าระบบของสมาชิก
	public function Login($tel,$password){
	$query = $this->db->prepare("SELECT * FROM member WHERE tel=:tel AND password=:password");
	$query->bindParam("tel", $tel, PDO::PARAM_STR);
	$query->bindParam("password", $password, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}
}
?>