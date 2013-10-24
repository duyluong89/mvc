<?php
class Request{
	private $_controller;
	
	private $_method;
	
	private $_args;
	
	private $_administrator = "";
	
	public function __construct(){
		$parts = explode('/',$_SERVER['REQUEST_URI']);
		$parts = array_filter($parts);
		if(($c = array_shift($parts)) == 'administrator'){
			$this->_administrator = 'administrator';
			$this->_controller = ($c = array_shift($parts))? $c: 'index';
			$this->_method = ($c = array_shift($parts))? $c: 'index';
			$this->_args = (isset($parts[0])) ? $parts : array();
		}else{
			$this->_administrator = "";
			$this->_controller = ($c)? $c: 'index';
			$this->_method = ($c = array_shift($parts))? $c: 'index';
			$this->_args = (isset($parts[0])) ? $parts : array();
		}
		
	}
	
	public function getAdministrator(){
		return $this->_administrator != "" ? true : false;
	}
	public function getController(){
		return $this->_controller;
	}
	public function getMethod(){
		return $this->_method;
	}
	public function getArgs(){
		return $this->_args;
	}
	
}