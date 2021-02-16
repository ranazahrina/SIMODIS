<?php

class Login_model extends CI_Model
{
	public function getUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function login($name)
	{
		return $this->db->get_where('user', ['username' => $name])->result_array();
	}


	public function simpan($table, $data)
	{

		$query = $this->db->insert($table, $data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	function update_product(){
        $id=$this->input->post('id');
        $tanggal=$this->input->post('tanggal');
        $nama=$this->input->post('nama');
        $detail=$this->input->post('detail');
        $jumlah=$this->input->post('jumlah');
 
        $this->db->set('id_pemasukan', $id);
        $this->db->set('tanggal', $tanggal);
        $this->db->where('nama', $nama);
        $this->db->set('detail', $detail);
        $this->db->where('jumlah', $jumlah);
        $result=$this->db->update('pemasukan');
        return $result;
	}
	
	function update_data($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
		return ($this->db->affected_rows() > 0) ? true : false;
		// $this->db->update($table, $data, $where);
	}	

	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		return ($this->db->affected_rows() > 0) ? true : false;
	}

	public function get_all($tabel)
	{
		$query = $this->db->select("*")
			->from($tabel)
			->order_by('tanggal', 'DESC')
			->get();
		return $query->result();
	}

	public function get_jumlah($tabel)
	{
		$this->db->select_sum('jumlah');
		$result = $this->db->get($tabel)->row();  
		return $result->jumlah;

	}

	public function get_profit()
	{
		$query = $this->db->select("*")
			->from('profit')
			->get();
		return $query->result();
	}

}
