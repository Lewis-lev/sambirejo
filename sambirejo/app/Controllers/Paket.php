<?php

namespace App\Controllers;
use App\Models\PaketModel;

class Paket extends BaseController
{
    public function index()
    {
        $data_view = [
            'judul' => 'Paket',
            'page_konten' => 'user/paket',
        ];

        return $this->user_template($data_view, []);
    }

    public function save () {
        $paketModel = new PaketModel();

        $paketModel->Save([
            'kode'  => $this->request->getVar('kode'),
            'nama'  => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'tiket' => $this->request->getVar('tiket'),
            'paket' => $this->request->getVar('jenis')
        ]);

        return redirect()->to('/paket');
    }

}