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

		$data = [
			'tittle' => 'Login | Simodis'

		];
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
		$isi = $this->databasepetugas->findAll();

		$data = [
			'tittle' => 'Homepage | Simodis',
			'isi' => $isi
		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/home', $data);
		echo view('layout/footer');
	}

	public function test()
	{
		$data = ['tittle' => 'Homepage | testing'];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/test');
		echo view('layout/footer');
	}


	public function datamasuk()
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('data');
		$request = service('request');

		$keyword = $request->getVar('keyword');
		$isidata = $this->databasesurvey->paginate(6, 'data');

		$survey = $this->databasejenissurvey->findAll();
		if ($keyword != null) {
			$isidata = $builder->like('nama_petugas', $keyword)->orLike('jenis_survey', $keyword)->orLike('responden', $keyword)->orLike('waktu_pelaksanaan', $keyword)->orLike('waktu_survey', $keyword)->get()->getResultArray();
		} else {
			$isidata;
		}

		$data = [
			'tittle' => 'Penambahan Data | Simodis',
			'isidata' => $isidata,
			'survey' => $survey,
			'validation' => \Config\Services::validation(),
			'pager' => $this->databasesurvey->pager
		];

		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/datamasuk', $data);
		echo view('layout/footer');
	}

	public function dokumen()
	{
		$isidata = $this->databasesurvey->paginate(6, 'data');
		$survey = $this->databasejenissurvey->findAll();
		$db      = \Config\Database::connect();
		$builder = $db->table('data');
		$request = service('request');
		$orderjenis = $request->getVar('jenis_survey');
		$orderpelaksanaan = $request->getVar('waktu_pelaksanaan');
		$keyword = $request->getVar('keyword');
		if ($orderjenis != null) {
			$isidata = $builder->like('jenis_survey', $orderjenis)->get()->getResultArray();
		} else if ($orderpelaksanaan != null) {
			$isidata = $builder->like('waktu_survey', $orderpelaksanaan)->get()->getResultArray();
		} else if ($keyword != null) {
			$isidata = $builder->like('dokumen_masuk', $keyword)->orLike('jenis_survey', $keyword)->orLike('responden', $keyword)->orLike('waktu_pelaksanaan', $keyword)->orLike('waktu_survey', $keyword)->get()->getResultArray();
		} else {
			$isidata;
		}
		// $test = $this->gabungdata->get_all();
		// dd($test);
		$data = [
			'tittle' => 'Dokumen Masuk | Simodis',
			'isidata' => $isidata,
			'jenis' => $survey,
			'pager' => $this->databasesurvey->pager
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
			'validation' => \Config\Services::validation()

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
		if (!$this->validate([
			'survey' => [
				'rules' => 'required|is_unique[jenis_survey.jenis_survey]',
				'errors' => [
					'required' => 'field jenissurvey harus diisi.',
					'is_unique' => 'field jenissurvey sudah terdaftar'
				]

			]

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/home/jenissurvey')->withInput()->with('validation', $validation);
		}
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
		$db      = \Config\Database::connect();
		$builder = $db->table('petugas');
		$request = service('request');
		$keyword = $request->getVar('keyword');
		if ($keyword != null) {
			$isidata = $builder->like('nama_petugas', $keyword)->orLike('realisasi', $keyword)->orLike('target', $keyword)->get()->getResultArray();
		} else {
			$isidata;
		}

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
		$db      = \Config\Database::connect();
		$request = service('request');



		$builder = $db->table('data');
		$query = $builder->join('petugas', 'petugas.nama_petugas=data.nama_petugas')->get()->getResultArray();

		$keyword = $request->getVar('keyword');
		if ($keyword != null) {

			$query = $builder->join('petugas', 'petugas.nama_petugas=data.nama_petugas')->like('petugas.nama_petugas', $keyword)->orLike('data.jenis_survey', $keyword)->orLike('data.waktu_pelaksanaan', $keyword)->orLike('petugas.target', $keyword)->orLike('petugas.realisasi', $keyword)->get()->getResultArray();
		} else {
			$query;
		}

		$data = [
			'tittle' => 'Per Survey | Simodis',
			'isi' => $query

		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/persurvey', $data);
		echo view('layout/footer');
	}

	public function editdokumen()
	{

		$data = [
			'tittle' => 'Per Survey | Simodis',


		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/editdokumen');
		echo view('layout/footer');
	}
}
