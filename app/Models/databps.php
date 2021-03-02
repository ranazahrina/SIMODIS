<?php

namespace App\Models;

use CodeIgniter\Model;

class databps extends Model
{
  protected $table = 'admin';
  protected $allowedFields = ['name', 'email', 'password'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  protected function beforeInsert(array $data)
  {
    $data = $this->passwordHash($data);

    return $data;
  }

  protected function beforeUpdate(array $data)
  {
    $data = $this->passwordHash($data);

    return $data;
  }

  protected function passwordHash(array $data)
  {
    if (isset($data['data']['password']))
      $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

    return $data;
  }

  /* function add_data($table, $data)
    {
      $query = $this->db->insert($table, $data);

      if($query){
        return true;
      } else {
        return false;
      }
    }

    public function get_all($tabel)
    	{
    		$query = $this->db->select('*')
    			->from($tabel)
    			->get();
    		return $query->result_array();
    	}

/*    function update_data(){
      $resp=$this->input->post('responden');
      $survey=$this->input->post('survey');
      $waktu_s=$this->input->post('waktu_s');
      $waktu_p=$this->input->post('waktu_p');
      $petugas=$this->input->post('petugas');


    }*/
}
