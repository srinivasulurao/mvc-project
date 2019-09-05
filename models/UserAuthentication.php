<?php

class UserAuthentication{
	
	public $db_connection;
	
	function __construct(){
		$this->db_connection=getLib('db_connector'); 
	}
	
	public function checkLogin($username,$password){
		
	}
	
	public function say_hi(){
		return "Say Hi";
	}
}