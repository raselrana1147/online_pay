<?php 
$real_path=realpath(dirname(__FILE__));
include_once $real_path."/../database/Database.php";
class Add 
{
	private $db;
	
	
	function __construct()
	{
		$this->db=new Database();
	}


	public function get_user(){
		$sql="SELECT * FROM user";
		$query=$this->db->select($sql);
		if ($query !=false) {
			return $query;
		}
	}


}