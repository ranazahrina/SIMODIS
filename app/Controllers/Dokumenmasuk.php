<?php

namespace App\Controllers;

use App\Models\dataJenisSurveyModel;
use \App\Models\datasurveyModel;
use CodeIgniter\CodeIgniter;

class Dokumenmasuk extends BaseController
{
    protected $data;
    protected $databps;
    public function __construct()
    {
        $this->data = new datasurveyModel();
        $this->databps = new dataJenisSurveyModel();
    }


    public function save()
    {
        $request = service('request');
        dd($request->getVar());
    }
    public function delete($id)
    {
        $this->data->delete($id);
        session()->setFlashdata('berhasil', 'Data berhasil dihapus');
        return redirect()->to('/home/dokumen');
    }

    public function edit($id)
    {

        $isidata = $this->data->find($id);
        $survey = $this->databps->findAll();

        $data = [
            'tittle' => 'Tab edit',
            'data' => $isidata,
            'jenis' => $survey
        ];

        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('layout/topbar');
        echo view('home/editmasukihiyy', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $request = service('request');
        $this->data->save([
            'id' => $id,
            'jenis_survey' => $request->getVar('jenis_survey'),
            'responden' => $request->getVar('responden'),
            'waktu_pelaksanaan' => $request->getVar('pelaksanaan'),
            'waktu_survey' => $request->getVar('waktu_s'),
            'nama_petugas' => $request->getVar('nama_petugas')
        ]);
        return redirect()->to('/home/dokumen');
    }
}
