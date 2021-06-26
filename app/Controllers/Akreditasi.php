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
        $data = [
            'title' => 'Form Tambah Data Akreditasi Program Studi Perguruan Tinggi',
        ];


        return view('akreditasi/create', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Data Akreditasi',
            'akreditasi' => $akreditasi = $this->akreditasiModel->where(['id => $id'])->first()
        ];
        return view('akreditasi/detail', $data);
    }

    public function save()
    {
        $this->akreditasiModel->save([
            'pt' => $this->request->getVar('pt'),
            'prodi' => $this->request->getVar('prodi'),
            'strata' => $this->request->getVar('strata'),
            'wilayah' => $this->request->getVar('wilayah'),
            'no_sk' => $this->request->getVar('no_sk'),
            'tahun_sk' => $this->request->getVar('tahun_sk'),
            'peringkat' => $this->request->getVar('peringkat'),
            'tgl_exp' => $this->request->getVar('tgl_exp'),
            'status_exp' => $this->request->getVar('status_exp')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/akreditasi/index');
    }
}
