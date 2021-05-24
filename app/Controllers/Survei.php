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
            ]
        ])) {
            $validation = \Config\Services::validation();


            return redirect()->to('/home/datamasuk')->withInput()->with('validation', $validation);
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

        session()->setFlashdata('nambah', 'Data berhasil ditambahkan');

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
        $masuk = $request->getVar('tanggal_masuk');
        $bulan = date("m", strtotime($masuk));

        if ($bulan == "01") {
            $bulanasli = "JANUARI";
        } else if ($bulan == "02") {
            $bulanasli = "FEBRUARI";
        } else if ($bulan == "03") {
            $bulanasli = "MARET";
        } else if ($bulan == "04") {
            $bulanasli = "APRIL";
        } else if ($bulan == "05") {
            $bulanasli = "MEI";
        } else if ($bulan == "06") {
            $bulanasli = "JUNI";
        } else if ($bulan == "07") {
            $bulanasli = "JULI";
        } else if ($bulan == "08") {
            $bulanasli = "AGUSTUS";
        } else if ($bulan == "09") {
            $bulanasli = "SEPTEMBER";
        } else if ($bulan == "10") {
            $bulanasli = "OKTOBER";
        } else if ($bulan == "11") {
            $bulanasli = "NOVEMBER";
        } else if ($bulan == "12") {
            $bulanasli = "DESEMBER";
        }


        $test = $this->data->find($id);
        $test1 = $this->datapetugas->findAll();

        $isi = $test['nama_petugas'];
        $temptarget = null;
        foreach ($test1 as $k) {
            if ($k['nama_petugas'] == $isi) {
                $tempid = $k['id'];
                $tempreal = $k['realisasi'];
                $temptarget = $k['target'];
                if ($k['realisasi'] < $k['target'] && $k['bulan_masuk'] == null) {
                    $this->datapetugas->save([
                        'id' => $tempid,
                        'realisasi' => $tempreal + 1,
                        'bulan_masuk' => $bulanasli
                    ]);
                } else if ($k['realisasi'] < $k['target'] && $k['bulan_masuk'] != null) {
                    $this->datapetugas->save([
                        'nama_petugas' => $isi,
                        'realisasi' => $tempreal + 1,
                        'target' => $temptarget,
                        'bulan_masuk' => $bulanasli
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
                    if ($row->realisasi != 0) {

                        $this->datapetugas->save([
                            'id' => $row->id,
                            'target' => $row->target - 1,
                            'realisasi' => $row->realisasi - 1

                        ]);
                    } else {
                        $this->datapetugas->save([
                            'id' => $row->id,
                            'target' => $row->target - 1

                        ]);
                    }
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
        session()->setFlashdata('editdata', 'Data berhasil diubah');
        return redirect()->to('/home/datamasuk');
    }
}
