<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ['tittle' => 'Login | Simodis'];
		echo view('layout/header', $data);
		echo view('login/login');
		echo view('layout/footer');
	}

	public function home()
	{
		$data = ['tittle' => 'Homepage | Simodis'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/home');
		echo view('layout/footer');
	}

	public function datamasuk()
	{
		$data = ['tittle' => 'Penambahan Data | Simodis'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/datamasuk');
		echo view('layout/footer');
	}
}
