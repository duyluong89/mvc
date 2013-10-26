<?php
class views {
	public $_data;
	public $load;
	public $config;
	public $translate;
	public $_dataAdmin;
	public $_templateName;
	
	/**
	 * @return the $_templateName
	 */
	public function getTemplateName() {
		return $this->_templateName;
	}

	/**
	 * @param field_type $_templateName
	 */
	public function setTemplateName($_templateName) {
		$this->_templateName = $_templateName;
	}

	public function __construct() {
		global $config, $translate;
		$this->load = new Load ();
		$this->config = $config;
		$this->translate = $translate;
		$this->_dataAdmin = array ();
		$this->_data = array ();
		$this->_templateName ="";
	}
	public function assigned($name, $data) {
		if (array_key_exists ( $name, $this->_data )) {
			if (is_array ( $this->_data [$name] )) {
				if (is_array ( $data )) {
					$this->_data [$name] = array_merge ( $this->_data [$name], $data );
				} else {
					$this->_data [$name] = $data;
				}
			} else {
				if (is_array ( $data )) {
					$this->_data [$name] = array_merge ( array (
							$name => $this->_data [$name] 
					), $data );
				} else {
					$this->_data [$name] = array (
							$this->_data [$name],
							$data 
					);
				}
			}
		} else {
			$this->_data [$name] = $data;
		}
		
	}
	public function extractView($vars) {
		if (is_array ( $vars )) {
			foreach ( $vars as $var ) {
				echo $var;
			}
		} else {
			echo $vars;
		}
	}
	public function adminAssigned($name, $data) {
		$this->_dataAdmin [$name] = $data;
	}
	public function getAdminData() {
		return $this->_dataAdmin;
	}
	public function getData() {
		return $this->_data;
	}
	public function render() {
		$baseData = array (
				'config' => $this->config,
				'view' => $this,
				'trans' => $this->translate 
		);
		
		$data = array_merge ( $baseData, $this->getData () );
		
		$this->load->template ( $this->config->skinName, $data, $this->getTemplateName());
	}
	public function renderAdmin() {
		$baseData = array (
				'config' => $this->config,
				'view' => $this,
				'trans' => $this->translate 
		);
		
		$data = array_merge ( $baseData, $this->getAdminData () );
		$this->load->template ( $this->config->skinAdmin, $data );
	}
	function includeFile($fileView, $vars = null) {
		if (! is_null ( $vars ))
			extract ( $vars );
		include $fileView;
		return;
	}
	public function includeStyle($fileName = "") {
		$css = '<link href="' . $fileName . '" rel="stylesheet" type="text/css" />';
		return $css;
	}
	public function includeJs($fileName = "") {
		$js = "<script src='" . $fileName . "'  type='text/javascript'></script>";
		return $js;
	}
	public function includeText($text = "") {
		return $text;
	}
}