<?php
class indexController extends controllers{
	
	public function index(){
		global $config;
		$data['content'] = $this->load->view('test',null, true);
		$this->load->view('index',$data);
	}
}