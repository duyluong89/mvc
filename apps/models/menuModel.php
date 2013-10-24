<?php
class menuModel extends baseModels{
	public function __construct(){
		parent::__construct();
		$this->setTableName('menu');
	}
	
	public function selectNav(){
		$parent = $this->db->select($this->getTableName(),"parent = 0","order asc");
		
	}
	
}