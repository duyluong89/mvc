<?php
class Router{
	
	public static function route(Request $request){
		$isAdministrator = $request->getAdministrator();
		
		$controller = $request->getController().'Controller';
		$method = $request->getMethod();
		$args = $request->getArgs();
		if($isAdministrator != false){
			$pathProvider = strtoupper($request->getKeyProvider() . "PATH");
			$user_defined_constants=get_defined_constants(true)['user'][$pathProvider];
			$controllerFile =  $user_defined_constants .'controllers/'.$controller.'.php';
		}else{
			$controllerFile = APPPATH.'controllers/'.$controller.'.php';
		}
		if(is_readable($controllerFile)){
			
			require_once $controllerFile;

			$controller = new $controller;
			$method = (is_callable(array($controller,$method))) ? $method : 'index';

			if(!empty($args)){
				call_user_func_array(array($controller,$method),$args);
			}else{
				call_user_func(array($controller,$method));
			}
			return;
		}

		throw new Exception('404 - '.$request->getController().' not found');
	}
}