<?php
class Request{
	private $_controller;
	
	private $_method;
	
	private $_args;
	
	private $_administrator = "";
	private $_keyProvider;
	
	private $config;
	public function __construct(){
		global $config;
		$this->config = $config;
		
		$parts = explode('/',$_SERVER['REQUEST_URI']);
		$parts = array_filter($parts);
		$c = array_shift($parts);
		foreach ($this->config->provider as $key => $provider){
			if( $c == $provider){
				$this->_keyProvider = $key;
				$this->_administrator = $provider;
				$this->_controller = ($c = array_shift($parts))? $c: 'index';
				$this->_method = ($c = array_shift($parts))? $c: 'index';
				$this->_args = (isset($parts[0])) ? $parts : array();
				return;
			}	
		}
		$this->_controller = ($c)? $c: 'index';
		$this->_method = ($c = array_shift($parts))? $c: 'index';
		$this->_args = (isset($parts[0])) ? $parts : array();
		
		
	}
	
	public function getKeyProvider(){
		return $this->_keyProvider;
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