<?php

function debug($data){
	echo "<pre>";
	print_r($data); 
	echo "</pre>";
}

function getLib($library_name){
	global $root_folder; 
	include_once($root_folder."/libraries/$library_name.php");
	$lib_obj=new $library_name;
	return $lib_obj; 
}

function getView($view_name,$data){
	global $root_folder;
	include_once($root_folder."/views/$view_name.php"); 
}

function getModel($model_name){
	global $root_folder;
	include_once($root_folder."/models/$model_name.php");
	$model_obj=new $model_name; 
	return $model_obj;
}