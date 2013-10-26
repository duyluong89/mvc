<?php
class indexController extends siteController{
	public function __construct(){
		parent::__construct();
		
	}
	public function index(){
		$test = $this->menu->select_all();
		$content = $this->load->view(array('lstObj'=>$test));
		$this->view->assigned('content', $content);
		$this->view->render();
	}
}