<?php
class views{
	public $_data;
	public $load;
	public function assgined($name,$data){
		$this->_data[$name] = $data;
	}
	
	public function getData(){
		return $this->_data;
	}
	public function render(){
		$this->load = new Load;
		$this->load->view('index',$this->_data);
	}
}