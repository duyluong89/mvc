<?php
class translate{
	
	private $config;
	public function __construct(){
		global $config;
		$this->config = $config;
	}
	public function t($key){
		$language  = $this->config->language;
		$arrtranslate = include 'languages/' . $language . '.php';
		$result = array_key_exists($key, $arrtranslate) ? $arrtranslate[$key] : $key;
		return $result; 
	}
}