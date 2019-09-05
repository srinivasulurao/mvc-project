<?php
class db_connector{
	
	public $conn;
	
	function __construct(){
		global $config;
		$this->conn=mysqli_connect($config['db_host'],$config['db_username'],$config['db_pass'],$config['db_name']);
	}
	
	function getRecords($conn, $sql){
		$query_resource=mysqli_query($conn,$sql); 
		$my_data_object=array();
		while($rec=mysqli_fetch_object($query_resource)){
			$my_data_object[]=$rec;
		}
		
		return $my_data_object; 
	}
	
	function insertRecord($sql){
		mysqli_query($this->conn, $sql); 
		return mysqli_insert_id($this->conn);
	}
}