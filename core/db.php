<?php
class db{
	protected $config;
	public $connect;
	public function __construct(){
		global $config;
		$this->config = $config;
		$this->connectDatabase();
	}
	public function connectDatabase(){
		
		switch ($this->config->db_Type){
			case "mysql":
				$this->mySql();
				break;
			case "mysqli":
					break;
			default:
				
				break;
		}
		
	}
	
	public function mySql(){
		$this->connect = mysql_connect($this->config->host,$this->config->user,$this->config->password);
		mysql_select_db($this->config->database,$this->connect);
		mysql_set_charset($this->config->db_Charset,$this->connect);
		return $this->connect;
	}
	public function disconnect(){
		if (mysqli_connect_errno($this->connect))
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		mysqli_close($this->connect);
		
	}
	
	public function query($query){
		
		switch ($this->config->db_Type) {
			case "mysql":
				$result = mysql_query($query, $this->connect) ;
				$return_o  = mysql_fetch_assoc($result); 
				
			break;
			
			default:
				;
			break;
		}
		
		return $return_o;
	} 
	
	public function select($table, $where = null, $order_by = null){
		$query = "SELECT * FROM $table";
		if(!is_null($where)){
			if(is_string($where)){
				$query .=" WHERE $where";
			}else if(is_array($where)){
				$tmp = " WHERE ";
				$count = 1;
				foreach ($where as $key => $value){
					$tmp .=" $key = '$value' ";
					if(count($where) > $count) $tmp .="AND ";
					$count++;
				}
				
				$query .= $tmp;
			}
			
		}
		if(!is_null($order_by) && is_string($order_by)){
			$query .=" ORDER BY $order_by";
			//echo $query; die();
		}
		
		$result = mysql_query($query,$this->connect) or die('can not excute query ');
		$return_o = array();
		$listFields = mysql_list_fields($this->config->database, $table,$this->connect);
		$num = mysql_num_fields($listFields);
		
		while ($row = mysql_fetch_array($result)){
			$a =  str_replace("?",$table,"?Entity");
			$newEntry = new $a();
		for ($i=0;$i< $num; $i++){
			$name = mysql_field_name($listFields, $i);
			$b = str_replace("?", ucfirst($name), "set?");
			$newEntry->$b($row[$name]);
			}
			$return_o[] = $newEntry;
			}	
		return $return_o;
		
	}
	
	
	
	public function update($data){
		
	}
	
	
}