<?php

namespace App\Controllers;

use App\Models\databps;

class Home extends BaseController
{
	protected $request;

	public function index()
	{
		$data = ['tittle' => 'Login | Simodis'];
		helper(['form']);

		echo view('layout/header', $data);
		echo view('login/login');
		echo view('layout/footer');
	}


	public function register()
	{

		$data = ['tittle' => 'Register | Simodis'];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'name' => 'required|min_length[3]|max_length[50]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admin.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password2' => 'matches[password]',
			];

			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {

				$model = new databps();
				$newData = [
					'name' => $this->request->getVar('name'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Berhasil Registrasi!');
				return redirect()->to('/');
			}
		}

		echo view('layout/header', $data);
		echo view('login/register');
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
