<?php

namespace App\Controllers;

use App\Models\databps;
use App\Models\datasurveyModel;
use App\Models\dataPetugasModel;
use App\Models\dataJenisSurveyModel;
use App\Models\penggunaModel;

class Home extends BaseController
{
	protected $request;
	protected $databps;
	protected $databasesurvey;
	protected $databasepetugas;
	protected $datausers;


	public function __construct()
	{
		$this->model = new databps();
		$this->databasesurvey = new datasurveyModel();
		$this->databasepetugas = new dataPetugasModel();
		$this->databasejenissurvey = new dataJenisSurveyModel();
		$this->datausers = new penggunaModel();
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

	public function register()
	{

		$data = ['tittle' => 'Register | Simodis'];
		helper(['form']);

		echo view('layout/header', $data);
		echo view('login/register');
		echo view('layout/footer');
	}

	public function home()
	{
		$isi = $this->databasepetugas->findAll();


		$data = [
			'tittle' => 'Homepage | Simodis',
			'isi' => $isi,

		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar', $data);
		echo view('home/home', $data);
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
		echo view('home/dokumen', $data);
		echo view('layout/footer');
	}

	public function jenissurvey()
	{

		$data = [
			'tittle' => 'Jenis Survey | Simodis',
			'validation' => \Config\Services::validation()

		];

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


	public function searchingtabpetugas($jenissurvei)
	{
		$request = service('request');
		$survey = $this->databasejenissurvey->findAll();
		$db      = \Config\Database::connect();
		$build = $db->table('data');
		$keyword = $request->getVar('keyword');
		$querypencarian = $build->join('petugas', 'petugas.nama_petugas=data.nama_petugas')->where('data.jenis_survey', $jenissurvei)->like('petugas.nama_petugas', $keyword)->get()->getResultArray();
		$data = [
			'tittle' => 'Per Survey | Simodis',
			'survey' => $survey,
			'petugas' => $querypencarian,
			'jenissurvei' => $jenissurvei

		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/perpetugas_pet', $data);
		echo view('layout/footer');
	}

	public function searchingtabresponden($jenissurvei)
	{
		$survey = $this->databasejenissurvey->findAll();
		$request = service('request');
		$db      = \Config\Database::connect();
		$build2 = $db->table('data');
		$keyword = $request->getVar('keyword');
		$querypencarian = $build2->where('jenis_survey', $jenissurvei)->like('responden', $keyword)->get()->getResultArray();
		$data = [
			'tittle' => 'Per Survey | Simodis',
			'survey' => $survey,
			'petugas' => $querypencarian,
			'jenissurvei' => $jenissurvei

		];
		echo view('layout/header', $data);
		echo view('layout/sidebar');
		echo view('layout/topbar');
		echo view('home/perpetugas_re', $data);
		echo view('layout/footer');
	}

	public function perpetugas()
	{

		$survey = $this->databasejenissurvey->findAll();
		$db      = \Config\Database::connect();
		$request = service('request');
		$keyword = $request->getVar('keyword');
		$build2 = $db->table('data');
		$checkjenis = $request->getVar('jenis_survey');
		$checkbyapa = $request->getVar('byapanih');
		if ($checkbyapa != null && $checkjenis != null) {
			if ($checkbyapa == "petugas") {
				$querypetugas = $build2->join('petugas', 'petugas.nama_petugas=data.nama_petugas')->like('data.jenis_survey', $checkjenis)->get()->getResultArray();
				$data = [
					'tittle' => 'Per Survey | Simodis',
					'survey' => $survey,
					'petugas' => $querypetugas,
					'jenissurvei' => $checkjenis

				];
				echo view('layout/header', $data);
				echo view('layout/sidebar');
				echo view('layout/topbar');
				echo view('home/perpetugas_pet', $data);
				echo view('layout/footer');
			} else if ($checkbyapa == "responden") {

				$queryresponden = $build2->like('jenis_survey', $checkjenis)->get()->getResultArray();

				$data = [
					'tittle' => 'Per Survey | Simodis',
					'survey' => $survey,
					'petugas' => $queryresponden,
					'jenissurvei' => $checkjenis
				];
				echo view('layout/header', $data);
				echo view('layout/sidebar');
				echo view('layout/topbar');
				echo view('home/perpetugas_re', $data);
				echo view('layout/footer');
			} else {
				$data = [
					'tittle' => 'Per Survey | Simodis',
					'survey' => $survey,
					'jenissurvei' => $checkjenis
				];
				echo view('layout/header', $data);
				echo view('layout/sidebar');
				echo view('layout/topbar');
				echo view('home/perpetugas', $data);
				echo view('layout/footer');
			}
		} else {

			$data = [
				'tittle' => 'Per Survey | Simodis',
				'survey' => $survey,
				'jenissurvei' => $checkjenis
			];
			echo view('layout/header', $data);
			echo view('layout/sidebar');
			echo view('layout/topbar');
			echo view('home/perpetugas', $data);
			echo view('layout/footer');
		}
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
