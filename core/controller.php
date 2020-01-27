<?php
class controller {

	protected $db;
	protected $lang;

	public function __construct() {
		global $config;

	
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($template = "home", $viewName, $viewData = array()) {
		include 'views/template' . $template . '.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

}