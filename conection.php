<?php 

set_include_path("/recursos");
 require_once 'config.php';

 
 class DB_conection
 {
 	
 	private $connect;
 	function __construct()
 	{
 		$this->connect = mysqli_connect(hostname,username,password,db) or die("DB connection error");
 	}

 	public function get_Connection(){
 		return $this->connect;
 	}
 }


 ?>