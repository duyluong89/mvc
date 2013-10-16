<?php
class Load{

	public function view($name,array $vars = null,$_return = false){
		$request = new Request();
		$file = APPPATH.'views/' . $request->getController() .'/'.$name.'View.php';
		if(is_readable($file)){

			if(isset($vars)){
				extract($vars);
			}
			require($file);
			ob_start();
			if ($_return === TRUE) // return none html file
			{
				$buffer = ob_get_contents();
				@ob_end_clean();
				return $buffer;
			}
			return true;
		}
		throw new Exception('View issues');
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
		throw new Exception('Model issues.');
	}
}
