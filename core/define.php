<?php
//define valiable
define('SITE_PATH',realpath(dirname(dirname(__FILE__))).'/');
define("APPPATH", SITE_PATH . 'apps/');
define("UPLOAD_TYPE_IMAGE", 'image');
define("UPLOAD_TYPE_DOC", 'document');
define("UPLOAD_TYPE_VIDEO", 'videos');
defineProvider();
function defineProvider(){
	$_config = new SystenConfig();
	foreach ($_config->provider as $key =>$p){
		$provi = strtoupper($key);
		define($provi . "PATH", SITE_PATH . $p .'/');
	}
}
