<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usermodel;

class Usercontroller extends BaseController
{
	protected $model;

	public function index()
	{
		$this->model = new Usermodel($db);
		$user = $this->model->find('1');
		// var_dump($user);
		return $user;
	}
}
