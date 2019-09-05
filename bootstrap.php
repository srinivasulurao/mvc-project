<?php
try{
		$query_string=$_REQUEST['url'];
		$exploder=explode("/",$query_string); 
		$requested_controller=$exploder[0];
		$requested_method=$exploder[1];

		$param=array();

		$param[0]=(sizeof($exploder)>2)?$exploder[1]:null;
		$param[1]=(sizeof($exploder)>3)?$exploder[2]:null;

		spl_autoload_register(function($class_name){
			include_once("controllers/$class_name".".php"); 
		}); 
        //Call the helper function,
		include_once("helpers/helpers.php"); 
		
		$invoking_class_object=new $requested_controller();
		if(sizeof($param)==1){
			 $invoking_class_object->$requested_method($param[0]); 
		}
		else if(sizeof($param)==2){
			 $invoking_class_object->$requested_method($param[1]);
		}
		else{
			$invoking_class_object->$requested_method();
		}

}
catch(Exception $e){
	echo $e->getMessage()."@".$e->getLine(); 
	http_response_code(404);
}

?>