<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;

class Logincontroller extends BaseController
{
	protected $controller;

	public function index()
	{
		$data['title'] = "Iniciar sesión |";
		$section = $this->load_login();
		$this->controller = new TemplateController();
		return $this->controller->load_template($section, $data);
	}
	protected function load_login()
	{
		return view('pages/login/tmp_login');
	}
}
