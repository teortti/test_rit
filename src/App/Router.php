<?php 

declare(strict_types=1);

namespace App\App;

class Router{
    public function __invoke(string $uri): void
	{
		$path = $this->processPath($uri);
    	$controllerClass = '\\App\\Controller\\' . $path['controller'];
    	if (class_exists($controllerClass)) {
    	    $controllerInstance = new $controllerClass();
    	    $controller = $path['params']?$controllerInstance($path['params']):$controllerInstance();
			$this->render($controller,$path['controller']);
    	}
	}
	private function processPath(string $uri) : array {
		$uriArray = explode('/', $uri);
		$controller = ($uriArray[1])?$uriArray[1]:'Main';
		$params = array();
		for ($i=2; $i < count($uriArray); $i++) { 
			$params[] = $uriArray[$i];
		}
		return [
			'controller' => ucfirst($controller),
			'params' => $params??[]
		];
	}
	public function render(array $data = [], string $view) : void {
		echo '<link rel="stylesheet" href="../../css/style.css">';
		require( __DIR__ ."/../View/".$view.".php");
	}
}
?>