<?php
class views{
	public $_data;
	public $load;
	
	public function __construct(){
		$this->load = new Load;
	}
	public function assigned($name,$data){
		$this->_data[$name] = $data;
	}
	
	public function getData(){
		return $this->_data;
	}
	public function render(){
		$this->load->template('default',$this->getData());
	}
}