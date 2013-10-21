<?php
class Load{

	public function view($name,array $vars = null,$_return = TRUE){
		$request = new Request();
		$method = $request->getMethod();
		if(is_array($name)) {
			$vars = $name;
			$name = $method;
		}
		$file = APPPATH.'views/' . $request->getController() .'/'.$name.'View.php';
		if(is_readable($file)){

			if(isset($vars)){
				extract($vars);
			}
			ob_start();
			include($file);
			if ($_return === TRUE) // return none html file
			{
				$buffer = ob_get_contents();
				@ob_end_clean();
				return $buffer;
			}
			return true;
		}
		throw new Exception('Can not load views');
	}
	public function model($name){
		$model = $name.'Model';
		$modelPath = APPPATH.'models/'.$model.'.php';

		if(is_readable($modelPath)){
			require_once($modelPath);

			if(class_exists($model)){
				$registry = Registry::getInstance();
				$registry->$name = new $model;
				return true;
			}
		}
		throw new Exception('Can not load model.');
	}
	
	public function template($name, array $vars = null,$templateName = ""){
		if($templateName === ""){
			$templateName = "template";
		}
		$file = SITE_PATH.'templates/' . $name .'/' . $templateName. '.php';
		if(is_readable($file)){
		
			if(isset($vars)){
				extract($vars);
			}
			require_once $file;
			return true;
		}
		throw new Exception('no templates file');
	}
}
