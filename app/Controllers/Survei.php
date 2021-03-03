<?php

namespace App\Controllers;

use \App\Models\datasurveyModel;
use CodeIgniter\CodeIgniter;

class Survei extends BaseController
{

    protected $data;
    public function __construct()
    {
        $this->data = new datasurveyModel();
    }

    public function test()
    {
        $data = [
            'title' => 'test'
        ];

        return view('/home/testController', $data);
    }


    public function save()
    {
        $request = service('request');
        // dd($request->getVar());
        $this->data->save([
            'jenis_survey' => $request->getVar('jenis_survey'),
            'responden' => $request->getVar('responden'),
            'waktu_pelaksanaan' => $request->getVar('pelaksanaan'),
            'waktu_survey' => $request->getVar('waktu_s'),
            'nama_petugas' => $request->getVar('nama_petugas')
        ]);
        return redirect()->to('/home/datamasuk');
    }

    public function delete($id)
    {
        $this->data->delete($id);
        session()->setFlashdata('berhasil', 'Data berhasil dihapus');
        return redirect()->to('/home/datamasuk');
    }

    // public function edit($id){
    //     $data 
    // }
}
