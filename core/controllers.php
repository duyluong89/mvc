<?php
abstract class controllers{
	
		protected $_registry;

		protected $load;

		public function __construct(){
			$this->_registry = Registry::getInstance();
			$this->load = new Load;
		}
		abstract public function index();

		final public function __get($key){
			$return = $this->_registry->$key;
			if($return){
				return $return;
			}
			return false;
		}	
}