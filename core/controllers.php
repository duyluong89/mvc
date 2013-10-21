<?php
abstract class controllers{
	
		protected $_registry;

		protected $load;
		protected $view;
		protected $config;
		protected $entity;
		public function __construct(){
			global $view, $config, $entity;
			$this->view = $view;
			$this->config = $config;
			$this->entity = $entity;
			
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