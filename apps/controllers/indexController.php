<?php
class indexController extends controllers{
	
	public function index(){
		global $config,$view;
		
		$view->assgined('abc', 'abc');
		$content = $this->load->view('test',$view->getData(), true);
		$view->assgined('content', $content);
		$view->render();
	}
}