<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;

class StudentController extends BaseController
{
	protected $template = null;
	public function index()
	{
		$data['title'] = 'Estudiantes |';
		$section = $this->load_students();
		$this->template = new Templatecontroller();
		return $this->template->load_template($section, $data);
	}

	protected function load_students()
	{
		return view('pages/students/tmp_students');
	}
}
