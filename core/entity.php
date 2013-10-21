<?php
class entity{
	protected $db;
	protected $config;
	
	function __construct(){
		global $db, $config;
		$this->db = $db;
		$this->config = $config;
	}
	
	function getFields($table_name){
		$arrField = array();
		$listFields = mysql_list_fields($this->config->database, $table_name,$this->db->connect);
		$num = mysql_num_fields($listFields);
		for ($i=0;$i< $num; $i++){
			$arrField[] =  array( 'name'=>mysql_field_name($listFields, $i),
									'type'=>mysql_field_type($listFields, $i));
			
		}
		return $arrField;
	}
	public function __get($var)
	{
		$func = 'get'.$var;
		if (method_exists($this, $func))
		{
			return $this->$func();
		} else {
			throw new Exception("Inexistent property: $var");
		}
	}
	
	public function __set($var, $value)
	{
		$func = 'set'.$var;
		if (method_exists($this, $func))
		{
			$this->$func($value);
		} else {
			if (method_exists($this, 'get'.$var))
			{
				throw new Exception("property $var is read-only");
			} else {
				throw new Exception("Inexistent property: $var");
			}
		}
	}
	
	public function __call($val, $x) {
		if(substr($val, 0, 3) == 'get') {
			$varname = strtolower(substr($val, 3));
		}
		else {
			throw new Exception('Bad method.', 500);
		}
		if(property_exists('Yourclass', $varname)) {
			return $this->$varname;
		} else {
			throw new Exception('Property does not exist: '.$varname, 500);
		}
	}
	
	
	
	
}