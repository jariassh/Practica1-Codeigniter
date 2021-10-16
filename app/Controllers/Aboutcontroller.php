<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;

class Aboutcontroller extends BaseController
{
	protected $template = null;

	public function index()
	{
		$data['title'] = 'Somos |';
		$section = $this->load_about();
		$this->template = new Templatecontroller();
		return $this->template->load_template($section, $data);
	}

	protected function load_about()
	{
		return view('pages/about_us/tmp_about');
	}
}
