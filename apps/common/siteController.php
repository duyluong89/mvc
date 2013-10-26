<?php
class siteController extends controllers {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'menu' );
		$this->load->model ( 'block' );
		$this->loadBlock();
	}
	/*
	 * (non-PHPdoc) @see controllers::index()
	 */
	public function index() {
		// TODO Auto-generated method stub
	}
	private function loadBlock() {
		$blocks =  $this->block->getBlockByController();
		foreach ($blocks as $block){
			if($block->getUseBlock()){
				$data = $this->load->view('static',array('block'=>$block), true, 'block');
				$this->view->assigned($block->getPosition(), $data);
			}else{
				$_content = "<div class='block " . $block->getBlockClass(). "'>" . $block->getContent() . "</div>";
				$this->view->assigned($block->getPosition(), $_content);
			}
		}
	}
}