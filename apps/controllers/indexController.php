<?php
class indexController extends controllers{
	public function __construct(){
		parent::__construct();
		$this->load->model('menu');
	}
	public function index(){
		$test = $this->menu->select_all();
		//var_dump($test->getId()); die();
		$this->view->assigned('abc', 'abc');
		$content = $this->load->view(array('lstObj'=>$test));
		$this->view->assigned('content', $content);
		$this->view->render();
	}
}