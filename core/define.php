<?php
//define valiable
define('SITE_PATH',realpath(dirname(dirname(__FILE__))).'/');
define("APPPATH", SITE_PATH . 'apps/');
defineProvider();
function defineProvider(){
	$_config = new SystenConfig();
	foreach ($_config->provider as $key =>$p){
		$provi = strtoupper($key);
		define($provi . "PATH", SITE_PATH . $p .'/');
	}
}
