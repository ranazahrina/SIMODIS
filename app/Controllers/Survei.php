<?php

namespace App\Controllers;

use App\Models\dataJenisSurveyModel;
use App\Models\dataPetugasModel;
use \App\Models\datasurveyModel;

use CodeIgniter\CodeIgniter;
use phpDocumentor\Reflection\Types\Null_;

use function PHPUnit\Framework\isEmpty;

class Survei extends BaseController
{

    protected $data;
    protected $databps;
    protected $datapetugas;



    public function __construct()
    {
        $this->data = new datasurveyModel();
        $this->databps = new dataJenisSurveyModel();
        $this->datapetugas = new dataPetugasModel();
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
        if (!$this->validate([

            'jenis_survey' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom ini harus diisi'
                ]

            ],
            'waktu_s' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom ini harus diisi'
                ]
            ],
            'pelaksanaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom ini harus diisi'
                ]
            ], 'nama_petugas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom ini harus diisi'
                ]
            ], 'responden' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom ini harus diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/home/datamasuk')->withInput()->with('validation', $validation);
            // return redirect()->to('/komik/create')->withInput();
        }


        $request = service('request');
        $target = 1;
        $realisasi = 0;


        // dd($request->getVar());
        $this->data->save([
            'jenis_survey' => $request->getVar('jenis_survey'),
            'responden' => $request->getVar('responden'),
            'waktu_pelaksanaan' => $request->getVar('pelaksanaan'),
            'waktu_survey' => $request->getVar('waktu_s'),
            'nama_petugas' => $request->getVar('nama_petugas')

        ]);

        $namapetugas = $request->getVar('nama_petugas');
        $db      = \Config\Database::connect();
        $builder = $db->table('petugas');
        $query = $builder->get()->getResult();
        // $pendata = $db->table('data');
        // $querydata = $pendata->get()->getResult();

        $temp1 = null;
        $temp2 = null;
        // $temp3 = null;
        // $temp4 = null;
        $check = false;




        // ini nambahin data petugas target 

        if ($query == null) {
            $this->datapetugas->save([
                'nama_petugas' => $namapetugas,
                'target' => $target,
                'realisasi' => $realisasi
            ]);
        } else {

            foreach ($query as $row) {
                if ($namapetugas == $row->nama_petugas) {
                    $temp1 = $row->id;
                    $temp2 = $row->target;

                    $this->datapetugas->save([
                        'id' => $temp1,
                        'target' => $temp2 + 1
                    ]);
                    $check = true;
                    break;
                }

                // } else if ($namapetugas != $row->nama_petugas) {
                //     $temp2=false;
            }
            if ($check == false) {

                $this->datapetugas->save([
                    'nama_petugas' => $request->getVar('nama_petugas'),
                    'target' => $target,
                    'realisasi' => $realisasi
                ]);
            }
        }






        return redirect()->to('/home/datamasuk');
    }

    public function delete($id)
    {

        $ptgssrv = $this->data->find($id);
        $db      = \Config\Database::connect();
        $builder = $db->table('petugas');
        $ptgsaja = $builder->get()->getResult();
        $pk = null;

        foreach ($ptgsaja as $row) {
            if ($ptgssrv['nama_petugas'] == $row->nama_petugas) {
                $pk = $row->id;
                if ($row->target == 0) {
                    $this->datapetugas->delete($row->id);
                } else {
                    $this->datapetugas->save([
                        'id' => $row->id,
                        'target' => $row->target - 1
                    ]);
                }
            }
        }

        $cekdata = $this->datapetugas->find($pk);
        // dd($cekdata);

        if ($cekdata == null) {
            $this->data->delete($id);
        } else if ($cekdata['target'] == 0) {
            $this->datapetugas->delete($pk);
        }
        $this->data->delete($id);
        // if($ptgsaja['target']==0){
        //     $this->datapetugas->delete
        // }


        // $builder2 =$db->table('data');

        //  $ptgs= $builder->get()->getResult();
        //  $surv= $builder2->get()->getResult();

        //  foreach($surv as $row1){

        //  }



        session()->setFlashdata('berhasil', 'Data berhasil dihapus');
        return redirect()->to('/home/datamasuk');
    }
    public function taksuk($id)
    {
        $request = service('request');

        $this->data->save([
            'id' => $id,
            'dokumen_masuk' => $request->getVar('tanggal_masuk')
        ]);
        $test = $this->data->find($id);
        $test1 = $this->datapetugas->findAll();

        $isi = $test['nama_petugas'];
        foreach ($test1 as $k) {
            if ($k['nama_petugas'] == $isi) {
                $tempid = $k['id'];
                $tempreal = $k['realisasi'];
                if ($k['realisasi'] < $k['target']) {
                    $this->datapetugas->save([
                        'id' => $tempid,
                        'realisasi' => $tempreal + 1
                    ]);
                }
            }
        }


        session()->setFlashdata('taksuk', 'Tanggal berhasil dimasukan');
        return redirect()->to('/home/dokumen');
    }

    public function deletedoksuk($id)
    {

        $ptgssrv = $this->data->find($id);
        $db      = \Config\Database::connect();
        $builder = $db->table('petugas');
        $ptgsaja = $builder->get()->getResult();
        $pk = null;

        foreach ($ptgsaja as $row) {
            if ($ptgssrv['nama_petugas'] == $row->nama_petugas) {
                $pk = $row->id;
                if ($row->target == 0) {
                    $this->datapetugas->delete($row->id);
                } else {
                    $this->datapetugas->save([
                        'id' => $row->id,
                        'target' => $row->target - 1
                    ]);
                }
            }
        }

        $cekdata = $this->datapetugas->find($pk);
        if ($cekdata == null) {
            $this->data->delete($id);
        } else if ($cekdata['target'] == 0) {
            $this->datapetugas->delete($pk);
            $this->data->delete($id);
        }
        // dd($cekdata);

        // if ($cekdata['target'] == 0) {
        //     $this->datapetugas->delete($pk);
        // } else if ($cekdata == null) {
        //     $thid->data->delete($id);
        // }

        // if($ptgsaja['target']==0){
        //     $this->datapetugas->delete
        // }


        // $builder2 =$db->table('data');

        //  $ptgs= $builder->get()->getResult();
        //  $surv= $builder2->get()->getResult();

        //  foreach($surv as $row1){

        //  }

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
        echo view('home/editmasuk', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $request = service('request');
        $db      = \Config\Database::connect();
        $builder = $db->table('petugas');
        $query = $builder->get()->getResult();

        $before = $this->data->find($id);
        $sebelum = $before['nama_petugas'];
        $this->data->save([
            'id' => $id,
            'jenis_survey' => $request->getVar('jenis_survey'),
            'responden' => $request->getVar('responden'),
            'waktu_pelaksanaan' => $request->getVar('pelaksanaan'),
            'waktu_survey' => $request->getVar('waktu_s'),
            'nama_petugas' => $request->getVar('nama_petugas')
        ]);

        foreach ($query as $row) {
            if ($row->nama_petugas == $sebelum) {
                $this->datapetugas->delete($row->id);
            }
        }
        $namapetugas = $request->getVar('nama_petugas');

        $temp1 = null;
        $temp2 = null;
        $check = false;
        $target = 1;
        $realisasi = 0;





        // ini nambahin data petugas target 

        if ($query == null) {
            $this->datapetugas->save([
                'nama_petugas' => $namapetugas,
                'target' => $target,
                'realisasi' => $realisasi
            ]);
        } else {

            foreach ($query as $row) {
                if ($namapetugas == $row->nama_petugas) {
                    $temp1 = $row->id;
                    $temp2 = $row->target;

                    $this->datapetugas->save([
                        'id' => $temp1,
                        'target' => $temp2 + 1
                    ]);
                    $check = true;
                    break;
                }
            }
            if ($check == false) {

                $this->datapetugas->save([
                    'nama_petugas' => $request->getVar('nama_petugas'),
                    'target' => $target,
                    'realisasi' => $realisasi
                ]);
            }
        }
        return redirect()->to('/home/datamasuk');
    }
}
