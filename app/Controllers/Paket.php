<?php

namespace App\Controllers;
use App\Models\PaketModel;

class Paket extends BaseController
{
    public function index()
    {
        $data_view = [
            'judul' => 'Paket wisata',
            'page_konten' => 'user/paket',
        ];

        return $this->user_template($data_view, []);
    }

    public function save()
    {
        $rules = [
            'nama'   => 'required|min_length[2]|max_length[100]',
            'no_hp'  => 'required|min_length[8]|max_length[20]',
            'email'  => 'required|valid_email|max_length[100]',
            'tiket'  => 'required|max_length[60]',
            'jenis'  => 'required|max_length[60]',
        ];

        if (! $this->validate($rules)) {
            session()->setFlashdata('booking_error', implode(' ', $this->validator->getErrors()));

            return redirect()->to(base_url('paket#pesan'))->withInput();
        }

        $ticket = $this->request->getPost('tiket');
        $type   = $this->request->getPost('jenis');
        $options = [
            'Balkondes'           => ['Family Room', 'Couple Room', 'Extra Bed'],
            'Room Mahika'         => ['Couple Room Mahika'],
            'Paket Study'         => ['Paket Sambi 1', 'Paket Sambi 2', 'Paket Sambi 3', 'Paket Sambi A', 'Paket Sambi B', 'Paket Sambi C'],
            'Jeep Breksi'         => ['Short Trip Atas', 'Short Trip Bawah', 'Medium Trip', 'Long Trip'],
            'Camping Mahika Ayu' => ['Paket Mandiri', 'Paket Relax', 'Paket Regular', 'Paket Medium', 'Paket Premium', 'Paket Campervan'],
        ];

        if (! isset($options[$ticket]) || ! in_array($type, $options[$ticket], true)) {
            session()->setFlashdata('booking_error', 'Pilihan paket tidak valid. Silakan pilih kembali paket yang tersedia.');

            return redirect()->to(base_url('paket#pesan'))->withInput();
        }

        helper('text');
        $paketModel = new PaketModel();
        do {
            $code = 'P' . random_string('numeric', 8);
            $existingCode = (new PaketModel())->where('kode', $code)->first();
        } while ($existingCode !== null);

        $saved = $paketModel->insert([
            'kode'  => $code,
            'nama'  => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
            'tiket' => $ticket,
            'paket' => $type,
            'status' => 0,
            'kondisi' => 0,
        ]);

        if ($saved === false) {
            log_message('error', 'Unable to save Sambirejo package inquiry: ' . json_encode($paketModel->errors()));
            session()->setFlashdata('booking_error', 'Permintaan belum dapat disimpan. Silakan coba kembali atau hubungi pengelola melalui WhatsApp.');

            return redirect()->to(base_url('paket#pesan'))->withInput();
        }

        session()->setFlashdata('request_ticket', [
            'kode'  => $code,
            'nama'  => $this->request->getPost('nama'),
            'tiket' => $ticket,
            'paket' => $type,
            'tanggal' => date('d F Y'),
        ]);

        return redirect()->to(base_url('paket#pesan'));
    }
}