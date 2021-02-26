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

	public function dokumen()
	{
		$data = ['tittle' => 'Dokumen Masuk | Simodis'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/dokumen');
		echo view('layout/footer');
	}

	public function jenissurvey()
	{
		$data = ['tittle' => 'Jenis Survey | Simodis'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/jenissurvey');
		echo view('layout/footer');
	}

	public function persurvey()
	{
		$data = ['tittle' => 'Per Survey | Simodis'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/persurvey');
		echo view('layout/footer');
	}

	public function perpetugas()
	{
		$data = ['tittle' => 'Per Petugas | Simodis'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/perpetugas');
		echo view('layout/footer');
	}
}
