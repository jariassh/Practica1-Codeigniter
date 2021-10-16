<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;

class Enrollmentcontroller extends BaseController
{
	protected $controller = null;

	public function index()
	{
		$data['title'] = 'Matrículas |';
		$section = $this->load_enrollment();
		$this->controller = new Templatecontroller();
		return $this->controller->load_template($section, $data);
	}
	protected function load_enrollment()
	{
		return view('pages/enrollment/tmp_enrollment');
	}
}
