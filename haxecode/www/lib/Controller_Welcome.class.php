<?php

class Controller_Welcome extends Controller_Template {
	public function __construct($request, $response) { if(!php_Boot::$skip_constructor) {
		$this->template = "site";
		parent::__construct($request,$response);
	}}
	public function before() {
		haxe_Log::trace("ciao", _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 29, "className" => "Controller_Welcome", "methodName" => "before")));
		parent::before();
	}
	public function after() {
		haxe_Log::trace("ciao", _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 34, "className" => "Controller_Welcome", "methodName" => "after")));
		parent::after();
	}
	public function action_index() {
		$this->response->body("hello, world!");
	}
	public function action_ciao() {
		$this->template->message = Request::factory("http://wwww.google.com")->execute();
	}
	function __toString() { return 'Controller_Welcome'; }
}
