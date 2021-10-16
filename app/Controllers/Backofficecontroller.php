<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;
use App\Controllers\Usercontroller;

class Backofficecontroller extends BaseController
{
	protected $controller;
	protected $userModel;

	public function index()
	{
		$data['title'] = 'Backoffice |';
		$section = $this->load_backoffice();
		$this->controller = new Templatecontroller();
		return $this->controller->load_template($section, $data, false);
	}
	protected function load_backoffice()
	{
		$this->userModel = new Usercontroller();
		$user = $this->userModel->index();
		$dato = $user['name'];
		$data = array(
			'navAside' => view('pages/backoffice/modules/nav_aside'),
			'section' => view('pages/backoffice/modules/sectionUsers'),
			'user' => $user
		);
		return view('pages/backoffice/tmp_backoffice', $data);
	}
}
