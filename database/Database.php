<?php 
$real_path=realpath(dirname(__FILE__));
include_once $real_path."/../library/constant.php";
 
 class Database 
 {

 	 public $host   = DB_HOST;
 	 public $user   = DB_USER;
 	 public $pass   = DB_PASSWORD;
 	 public $dbname = DB_NAME;

 	 public $link;
 	 public $error;
 	
 	function __construct()
 	{
 		 $this->connectDB();
 	}

 	private function connectDB(){
	 	 $this->link = new mysqli($this->host, $this->user, $this->pass, 
	 	  $this->dbname);
	 	 if(!$this->link){
	 	   $this->error ="Connection fail".$this->link->connect_error;
	 	  return false;
	 	 }
 	 }

 	 public function select($query){

 	 	$result=$this->link->query($query) or die ($this->link->error.__LINE__);
 	 	if ($result->num_rows >0) {
 	 		return $result;
 	 	}else{
 	 		return false;
 	 	}
 	 }



 	 		//========insert data==========
 	 		public function insert($query){
 	 			$result=$this->link->query($query) or die ($this->link->error.__LINE__);
 	 			if ($result) {
 	 				return $result;
 	 			}else{
 	 				return false;
 	 			}

 	 		}



 	 //======update data======
 	 		public function update($query){
 	 			$result=$this->link->query($query) or die ($this->link->error.__LINE__);
 	 			if ($result) {
 	 				return $result;
 	 			}else{
 	 				return false;
 	 			}

 	 		}
 	 		///=====delete=====
 	 		public function delete($query){
 	 			$result=$this->link->query($query) or die ($this->link->error.__LINE__);
 	 			if ($result) {
 	 				return $result;
 	 			}else{
 	 				return false;
 	 			}

 	 		}
 	 	

 }