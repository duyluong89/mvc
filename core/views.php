<?php
class views{
	public $_data;
	public $load;
	public $config;
	public function __construct(){
		global $config;
		$this->load = new Load;
		$this->config = $config;
	}
	public function assigned($name,$data){
		$this->_data[$name] = $data;
	}
	
	public function getData(){
		return $this->_data;
	}
	public function render(){
		$baseData = array(
				'config'=>$this->config,
				'view' => $this
		);
		
		$data  = array_merge($baseData,$this->getData());
		$this->load->template('default',$data);
	}
	
	function includeFile($fileView,$vars = null){
		if(!is_null($vars))
			extract($vars);
		include $fileView;
		return;
	}
}