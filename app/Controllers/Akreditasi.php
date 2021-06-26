<?php

namespace App\Controllers;

use App\Models\AkreditasiModel;

class Akreditasi extends BaseController
{
    public function __construct()
    {
        $this->akreditasiModel = new AkreditasiModel();
    }


    public function index()
    {
        $akreditasi = $this->akreditasiModel->findAll();
        $data = [
            'title' => 'Akreditasi Program Studi Perguruan Tinggi',
            'akreditasi' => $akreditasi
        ];


        return view('akreditasi/index', $data);
    }

    public function create()
    {
        $akreditasi = $this->akreditasiModel->findAll();
        $data = [
            'title' => 'Form Tambah Data Akreditasi Program Studi Perguruan Tinggi',
        ];


        return view('akreditasi/create', $data);
    }
}
