<?php
class technologyModel extends baseModels{
	public function __construct(){
		parent::__construct();
		$this->setTableName('technology');
	}
}