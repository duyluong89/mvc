<?php
class SystenConfig{
	
	protected $isLocation; // 0: local; 1: live
	//Database Config
	public $host;
	public $user;
	public $password;
	public $database;
	
	// system site
	public $siteUrl;
	public $skinUrl;
	public $uploadUrl;
	public $publicImages;
	public $skinName;
	public $skinCss;
	public $skinJs;
	public $skinImages;
	public function __construct(){
		$this->isLocation = 0;
		if($this->isLocation == 0){
			$this->localConfig();
		}else{
			$this->liveConfig();
		}
	}
	function localConfig(){
		$this->host = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = "mvc";
		
		$this->siteUrl = "http://mvc.local/";
		$this->skinUrl = $this->siteUrl . 'public/skins/';
		$this->skinName = 'default';
		$this->skinImages = $this->siteUrl . 'public/skins/' . $this->skinName . '/images/';
		$this->skinCss = $this->siteUrl . 'public/skins/' . $this->skinName . '/css/';
		$this->skinJs = $this->siteUrl . 'public/skins/' . $this->skinName . '/js/';
		$this->uploadUrl = $this->siteUrl . 'public/uploads/';
		$this->publicImages = $this->siteUrl . 'public/images/';
		
			
	}
	
	function liveConfig(){
		
	}
}