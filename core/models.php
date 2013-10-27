<?php
abstract class baseModels{
	protected $config;
	protected $db;
	protected $table_name;
	/**
	 * @return the $table_name
	 */
	public function getTableName() {
		return $this->table_name;
	}

	/**
	 * @param field_type $table_name
	 */
	public function setTableName($table_name) {
		$this->table_name = $table_name;
	}

	public function __construct(){
		global $config, $db;
		$this->config = $config;
		$this->db = $db;
	}
	
	public function select_all(){
		return $this->db->select($this->getTableName());
	}
	
	public function select_by_id($id){
		$listobj = $this->db->select($this->getTableName(),"id = $id");
		if(count($listobj) > 0)
			$obj = $listobj[0];
		else $obj = false;
		return $obj;
	}
	
	public function select_by_puslish(){
		$result = $this->db->select($this->getTableName(),"puslish = 1");
		return $result;
	}
	
	public function select_pushlish_order(){
		$result = $this->db->select($this->getTableName(),"puslish = 1",'order asc');
		return $result;
	}
	
}