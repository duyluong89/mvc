<?php
class blockModel extends baseModels{
	
	public function __construct(){
		parent::__construct();
		$this->setTableName('block');
	}
	
	public function getBlockByController(){
		$request = new Request();
		$_controller = $request->getController();
		$blocks = $this->db->select($this->getTableName(),"controller = '$_controller' OR controller is null AND provider = 'site' AND puslish=1");
		return $blocks;
	}
	
}