<?php
class aboutController extends controllers{
	
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->view->assigned('content','this is about page');
		$this->view->render();
	}
	public function test(){
		
	}
}