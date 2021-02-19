<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | SIMODIS'
        ];
        echo view('pages/home', $data);
    }

    public function datamasuk()
    {
        $data = [
            'tittle' => 'Pemasukkan Data | SIMODIS'
        ];
        echo view('pages/datamasuk', $data);
    }

    public function dokumen()
    {
        $data = [
            'tittle' => 'Dokumen Masuk | SIMODIS'
        ];
        echo view('pages/dokumen', $data);
    }

    public function persurvey()
    {
        $data = [
            'tittle' => 'Per Survey | SIMODIS'
        ];
        echo view('pages/persurvey', $data);
    }

    public function perpetugas()
    {
        $data = [
            'tittle' => 'Per Petugas | SIMODIS'
        ];
        echo view('pages/perpetugas', $data);
    }
}
