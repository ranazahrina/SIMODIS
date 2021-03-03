<?php

namespace App\Controllers;

use App\Models\databps;
use App\Models\datasurveyModel;
use App\Models\dataPetugasModel;
use App\Models\dataJenisSurveyModel;

class Home extends BaseController
{
	protected $request;
	protected $databps;
	protected $databasesurvey;
	protected $databasepetugas;
	public function __construct()
	{
		$this->model = new databps();
		$this->databasesurvey = new datasurveyModel();
		$this->databasepetugas = new dataPetugasModel();
		$this->databasejenissurvey = new dataJenisSurveyModel();
	}


	public function index()
	{
		$data = ['tittle' => 'Login | Simodis'];
		helper(['form']);

		echo view('layout/header', $data);
		echo view('login/login');
		echo view('layout/footer');
	}

	/*	private function login()
	{
		$name = $this->input->post('uname');
		$pass = $this->input->post('password');
		$var = $this->db->get_where('admin', ['name' => $name])->row();
		if ($var) {
			if ($var->password == $pass){
					$_SESSION['name'] ="$name";
					$this->home();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                invalid password!
                                </div>');
				$data = ['tittle' => 'Login | Simodis'];
				echo view('layout/header', $data);
				echo view('login/login');
				echo view('layout/footer');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
															invalid username!
															</div>');
			$data = ['tittle' => 'Login | Simodis'];
			echo view('layout/header', $data);
			echo view('login/login');
			echo view('layout/footer');
		}
	}
*/
	public function register()
	{

		$data = ['tittle' => 'Register | Simodis'];
		helper(['form']);

		/*if ($this->request->getMethod() == 'post') {
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
					'password' => $this->request->getVar('password')
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Berhasil Menambah Pengguna!');
				return redirect()->to('register');
			}
		}*/

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
		// helper(['form']);
		/*if ($this->request->getMethod() == 'post') {
			$rules = [
				'jenis_survey' => 'required',
				'waktu_survey' => 'required',
				'waktu_pelaksanaan' => 'required',
				'nama_petugas' => 'required|min_length[2]|max_length[50]',
				'responden' => 'required'
			];

			$model = new datasurveyModel();
			$isidata = [
				'jenis_survey' => $this->request->getVar('jenis_survey'),
				'waktu_survey' => $this->request->getVar('waktu_survey'),
				'waktu_pelaksanaan' => $this->request->getVar('waktu_pelaksanaan'),
				'nama_petugas' => $this->request->getVar('nama_petugas'),
				'responden' => $this->request->getVar('responden')
			];
			$model->save($isidata);
			$isidata = $this->databasesurvey->findAll();
			$data = [
				'tittle' => 'Pemasukkan Data | Simodis',
				'isidata' => $isidata
			];
			$session = session();
			$session->setFlashdata('success', 'Berhasil Menambah Data!');
			return redirect()->to('datamasuk');
		}*/
		$isidata = $this->databasesurvey->findAll();

		$survey = $this->databasejenissurvey->findAll();
		$data = [
			'tittle' => 'Penambahan Data | Simodis',
			'isidata' => $isidata,
			'survey' => $survey
		];
		// helper(['form']);

		// if ($this->request->getMethod() == 'post') {
		// 	$rules = [
		// 		'survey' => 'required',
		// 		'waktu_s' => 'required',
		// 		'pelaksanaan' => 'required',
		// 		'petugas' => 'required',
		// 		'responden' => 'required'
		// 	];

		// 	if (!$this->validate($rules)) {
		// 		$data['validation'] = $this->validator;
		// 	} else {

		// 		$newData = [
		// 			'responden' => $this->request->getVar("responden"),
		// 			'survey' => $this->request->getVar("jenis_survey"),
		// 			'waktu_p' => $this->request->getVar("waktu_pelaksanaan"),
		// 			'waktu_s' => $this->request->getVar("waktu_survey"),
		// 			'dokumen' => $this->request->getVar("dokumen_masuk"),
		// 			'petugas' => $this->request->getVar("nama_petugas"),
		// 			'target' => $this->request->getVar("target"),
		// 			'realisasi' => $this->request->getVar("realisasi")
		// 		];
		// 		$this->model->add_data("data", $newData);
		// 		$session = session();
		// 		$session->setFlashdata('success', 'Berhasil Menambah Data!');
		// 		return redirect()->to('datamasuk');
		// 	}
		// }
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/datamasuk', $data);
		echo view('layout/footer');
	}

	public function dokumen()
	{
		$isidata = $this->databasesurvey->findAll();
		$data = [
			'tittle' => 'Dokumen Masuk | Simodis',
			'isidata' => $isidata
		];

		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/dokumen');
		echo view('layout/footer');
	}

	public function jenissurvey()
	{
		$data = [
			'tittle' => 'Jenis Survey | Simodis',

		];

		// helper(['form']);

		// if ($this->request->getMethod() == 'post') {
		// 	$rules = [
		// 		'survey' => 'required'
		// 	];

		// 	if (!$this->validate($rules)) {
		// 		$data['validation'] = $this->validator;
		// 	} else {

		// 		$newData = [
		// 			'survey' => $this->request->getVar("jenis_survey")
		// 		];

		// 		$this->model->insert($newData);
		// 		$session = session();
		// 		$session->setFlashdata('success', 'Berhasil Menambah Data!');
		// 		return redirect()->to('jenissurvey');
		// 	}
		// }
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/jenissurvey');
		echo view('layout/footer');
	}

	public function tambahjenissurvey()
	{
		$request = service('request');
		$this->databasejenissurvey->save([
			'jenis_survey' => $request->getVar('survey')
		]);
		session()->setFlashdata('Pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/home/jenissurvey');
	}

	public function perpetugas()
	{
		$isidata = $this->databasepetugas->findAll();
		$data = [
			'tittle' => 'Per Survey | Simodis',
			'petugas' => $isidata
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/perpetugas', $data);
		echo view('layout/footer');
	}

	public function persurvey()
	{
		$isidata = $this->databasesurvey->findAll();
		$data = [
			'tittle' => 'Per Survey | Simodis',
			'isidata' => $isidata,

		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/persurvey');
		echo view('layout/footer');
	}
}
