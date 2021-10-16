<?php

namespace App\Controllers;

use App\Controllers\Templatecontroller;

class Eventscontroller extends BaseController
{
	protected $controller = null;

	public function index()
	{

		$data['title'] = "Eventos |";
		$section = $this->load_events();
		$this->controller = new TemplateController();
		return $this->controller->load_template($section, $data);
	}
	protected function load_events()
	{
		return view('pages/events/tmp_events');
	}
}
