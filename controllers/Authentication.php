<?php

session_start(); 

class Authentication{
	public $db_connector;
	function __construct(){
		$this->db_connector=getLib('db_connector'); 
	}

	public function login(){
		$user_auth=getModel('UserAuthentication');
		$data=array();
		$data['message']=$user_auth->say_hi(); 
		getView('login',$data);
	}
	
	public function doLogin(){
		 $username=mysqli_real_escape_string($this->db_connector->conn, $_REQUEST['username']); 
		 $password=mysqli_real_escape_string($this->db_connector->conn, $_REQUEST['password']);
		 $pass=md5($password);
		 $sql="SELECT * FROM users where username='$username' AND password='$pass'"; 
		 $records=$this->db_connector->getRecords($this->db_connector->conn, $sql); 
		 if(sizeof($records) > 0){
			 $user=$records[0];
			 $_SESSION['user_id']=$user->user_id;
			 
			 header("Location:authentication/profile"); 
		 }
	} 
	
	public function profile(){
		
	}
}

?>