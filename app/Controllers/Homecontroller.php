<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;

class Homecontroller extends BaseController
{
	protected $template = null;

	public function index()
	{
		$data['title'] = '';
		$section = $this->load_home();
		$this->template = new Templatecontroller();

		return $this->template->load_template($section, $data);
	}

	protected function load_home()
	{
		$structure = array(
			'carousel' => view('pages/home/modules/carousel'),
			'article' => view('pages/home/modules/article'),
			'gallery' => view('pages/home/modules/gallery')
		);
		return view('pages/home/tmp_home', $structure);
	}
}
