<?php
class indexController extends siteController{
	public function __construct(){
		parent::__construct();
		
	}
	public function index(){
		$test = $this->menu->select_all();
		$content = $this->load->view(array('lstObj'=>$test));
		$this->view->assigned('slider', $this->load->view('slider', array('sliders'=>$this->slider->select_by_puslish()),true,'slider'));
		$this->view->assigned('technology', $this->load->view('technology', array('techs'=>$this->technology->select_by_puslish_order()),true,'technology'));
		$this->view->assigned('content', $content);
		$this->view->render();
	}
}