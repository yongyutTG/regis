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

}
?>
