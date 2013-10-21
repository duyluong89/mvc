<?php


require_once 'core/request.php';
require_once 'core/router.php';
require_once 'core/load.php';
require_once 'core/controllers.php';
require_once 'core/registry.php';
require_once 'core/models.php';

loadfiles(APPPATH . 'entity/');

function loadfiles($fullpath = ""){
	$handle = opendir($fullpath);
	if ($handle){  
		while (false !== ($file = readdir($handle))) {
			if($file != "." && $file != ".." && filetype($fullpath.$file)!='dir' && getFileExtension($file) == 'php'){
				if(file_exists($fullpath.$file)){
					include($fullpath.$file);
				}
			}
		}
	}
}
function getFileExtension($filename){
	$info = pathinfo($filename);
	return $info['extension'];
}