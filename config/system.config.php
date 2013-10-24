<?php
class SystenConfig{
	
	protected $isLocation; // 0: local; 1: live
	//Database Config
	public $host;
	public $user;
	public $password;
	public $database;
	public $db_Charset;
	public $db_Type;
	// system site
	public $siteUrl;
	public $skinUrl;
	public $uploadUrl;
	public $publicImages;
	public $skinName;
	public $skinCss;
	public $skinJs;
	public $skinImages;
	
	public $provider;
	
	public function __construct(){
		$this->isLocal = 0;
		if($this->isLocal == 0){
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
		$this->db_Charset = "utf8";
		$this->db_Type = "mysql";
		
		$this->siteUrl = "http://mvc.local/";
		$this->skinUrl = $this->siteUrl . 'public/skins/';
		$this->skinName = 'default';
		$this->skinImages = $this->siteUrl . 'templates/' . $this->skinName . '/images/';
		$this->skinCss = $this->siteUrl . 'templates/' . $this->skinName . '/css/';
		$this->skinJs = $this->siteUrl . 'templates/' . $this->skinName . '/js/';
		$this->uploadUrl = $this->siteUrl . 'public/uploads/';
		$this->publicImages = $this->siteUrl . 'public/images/';
		
		
		$this->provider = array(
				'admin'=>'administrator',
				'api' => 'api',
				'test'=>'test',
		);
			
	}
	
	function liveConfig(){
		
	}
}