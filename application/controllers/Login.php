<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		//load model
		$this->load->model('Login_model');
	}


	public function index()
	{
		if($_SESSION['level'] != ''){ 
			$this->dashboard();
		} else {
			$_SESSION['level']='';
			$_SESSION['username']='';
			$this->form_validation->set_rules('uname', 'Uname', 'required', [
				'required' => 'Data required'
			]);
			$this->form_validation->set_rules('password', 'Pass', 'required', [
				'required' => 'Data required'
			]);
			if ($this->form_validation->run() == false) {
				$data['judul'] = "Login | Memore";
				$this->load->view('template/header', $data);
				$this->load->view('login/login');
				$this->load->view('template/footer');
			} else {
				$this->_login();
			}
		}
	}

	private function _login()
	{
		$name = $this->input->post('uname');
		$pass = $this->input->post('password');
		$var = $this->db->get_where('users', ['username' => $name])->row();
		if ($var) {
			if ($var->password == $pass) {
				$_SESSION['username'] = "$name";
				$_SESSION['level'] = "$var->level";
				$this->dashboard();

			// 	$_SESSION['username'] = "$name";
			// 	$_SESSION['level'] = "$var->level";
			// 	$data = array(

			// 	'judul'		=> 'Dashboard | Memore',
			// 	'username' => $_SESSION['username'],
			// 	'jumlahpemasukan' => $this->Login_model->get_jumlah('pemasukan'),
			// 	'jumlahpengeluaran' => $this->Login_model->get_jumlah('pengeluaran'),
			// );
			// 	$this->load->view('template/header', $data);
			// 	$this->load->view('dashboard/owner', $data);
			// 	$this->load->view('template/footer');
				// $this->session->set_userdata($var);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                invalid password!
                                </div>');
				$data['judul'] = "Login Gagal | Memore";
				$this->load->view('template/header', $data);
				$this->load->view('login/login');
				$this->load->view('template/footer');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                invalid username!
                                </div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
	}

	public function dashboard()
	{
		$data = array(

			'judul'		=> 'Dashboard | Memore',
			'username' => $_SESSION['username'],
			'jumlahpemasukan' => $this->Login_model->get_jumlah('pemasukan'),
			'jumlahpengeluaran' => $this->Login_model->get_jumlah('pengeluaran'),
			'data_profit' => $this->Login_model->get_profit(),
		);
		if($_SESSION['level'] == ''){ 
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Harap login terlebih dahulu!
			</div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
		else{
			
			$this->load->view('template/header', $data);
			$this->load->view('dashboard/owner', $data);
			$this->load->view('template/footer');
		}
		
	}

	public function pemasukan()
	{
		// $var = ['username' => $_SESSION['username']];
		$data = array(

			'judul'		=> 'Pemasukan | Memore',
			'username' => $_SESSION['username'],
			'data_pemasukan' => $this->Login_model->get_all('pemasukan'),
		);

		if($_SESSION['level'] == ''){ 
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Harap login terlebih dahulu!
			</div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
		else{
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/pemasukan', $data);
		$this->load->view('template/footer');
	}}

	public function pengeluaran()
	{
		$data = array(
			'judul'		=> 'Pemasukan | Memore',
			'username' => $_SESSION['username'],
			'data_pengeluaran' => $this->Login_model->get_all('pengeluaran'),
		);
		if($_SESSION['level'] == ''){ 
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Harap login terlebih dahulu! </div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
		else{
			$var = ['username' => $_SESSION['username']];
			$data['judul'] = "Pengeluaran | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('dashboard/pengeluaran', $var);
			$this->load->view('template/footer');
		}
	}

	public function aturprofit()
	{
		// $var = ['username' => $_SESSION['username']];
		$data = array(
			'judul'		=> 'Atur Profit | Memore',
			'username' => $_SESSION['username'],
			'data_profit' => $this->Login_model->get_profit(),
		);

		if($_SESSION['level'] != 'admin'){ 
			$this->dashboard();
			// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			// Harap login terlebih dahulu!
			// </div>');
			// $data['judul'] = "Login Gagal | Memore";
			// $this->load->view('template/header', $data);
			// $this->load->view('login/login');
			// $this->load->view('template/footer');
		}
		else{
			$this->load->view('template/header', $data);
			$this->load->view('dashboard/aturprofit', $data);
			$this->load->view('template/footer');
		}
	}


	public function tambahpengeluaran()
	{
		if($_SESSION['level'] == ''){ 
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Harap login terlebih dahulu!
			</div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
		else{
		$var = ['username' => $_SESSION['username']];
		$data['judul'] = "Tambah Pemasukan | Memore";
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/tambahpengeluaran', $var);
		$this->load->view('template/footer');
	}
	}
	
	public function simpanpengeluaran()
	{
		$data = array(

			'nama'       => $_SESSION['username'],
			'jumlah'         => $this->input->post("jumlah"),
			'tanggal'    => $this->input->post("tanggal"),
			'detail'   => $this->input->post("detail")


		);

		$this->Login_model->simpan("pengeluaran", $data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

		//redirect
		redirect('pengeluaran');
	}

	public function tambahpemasukan()
	{
		if($_SESSION['level'] == ''){ 
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Harap login terlebih dahulu!
			</div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
		else{
		$var = ['username' => $_SESSION['username']];
		$data['judul'] = "Tambah Pemasukan | Memore";
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/tambahpemasukan', $var);
		$this->load->view('template/footer');
	}
	}
	
	public function simpan()
	{
		$data = array(

			'nama'       => $_SESSION['username'],
			'jumlah'         => $this->input->post("jumlah"),
			'tanggal'    => $this->input->post("tanggal"),
			'detail'   => $this->input->post("detail")


		);

		$this->Login_model->simpan("pemasukan", $data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

		//redirect
		redirect('pemasukan');
	}

	function update(){

		
		$id = $this->input->post('id_edit');

		$data = array(
			'nama'       => $_SESSION['username'],
			'jumlah'         => $this->input->post("jumlah"),
			'tanggal'    => $this->input->post("tanggal"),
			'detail'    => $this->input->post("detail"),

		);

		
	$where = array('id_pemasukan' => $id);

		$this->Login_model->update_data("pemasukan", $data, $where);
	 
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
		</div>');

	redirect('pemasukan');
}

// start atur profit

public function tambahaturprofit()
	{
		$data = array(

			'profit_nama'         => $this->input->post("tnama"),
			'profit_nilai'    	  => $this->input->post("tjumlah"),

		);

		$this->Login_model->simpan("profit", $data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

		//redirect
		redirect('aturprofit');
	}


function updateaturprofit(){
	    
			
	$id = $this->input->post('id_edit');

	$data = array(
		'profit_nama'       => $this->input->post("nama"),
		'profit_nilai'      => $this->input->post("jumlah"),
	);

	
	$where = array('id_profit' => $id);

	$this->Login_model->update_data('profit', $data, $where);

	$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
	</div>');

	redirect('aturprofit');
}

function hapusaturprofit(){
				
	$id = $this->input->post('id');
	$where = array('id_profit' => $id);
	$this->Login_model->hapus_data($where,'profit');
	
$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
</div>');
	redirect('aturprofit');
}

// End atur profit

function updatepengeluaran(){	
	$id = $this->input->post('id_edit');

	$data = array(
		'nama'       => $_SESSION['username'],
		'jumlah'         => $this->input->post("jumlah"),
		'tanggal'    => $this->input->post("tanggal"),
		'detail'    => $this->input->post("detail"),
	);

	
$where = array('id_pengeluaran' => $id);

	$this->Login_model->update_data("pengeluaran", $data, $where);
 
	$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
	</div>');

redirect('pengeluaran');
}

function hapuspengeluaran(){
			
	$id = $this->input->post('id');
	$where = array('id_pengeluaran' => $id);
	$this->Login_model->hapus_data($where,"pengeluaran");
	
$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
</div>');
	redirect('pengeluaran');
}

function hapus(){
			
	$id = $this->input->post('id');
	$where = array('id_pemasukan' => $id);
	$this->Login_model->hapus_data($where,"pemasukan");
	
$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
</div>');
	redirect('pemasukan');
}


	public function logout()
	{
		// $this->session->sess_destroy();
		$_SESSION['level']='';
		$_SESSION['username']='';
		redirect(base_url());
	}
}
