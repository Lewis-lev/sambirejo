<?php

namespace App\Controllers;
use App\Models\PaketModel;

class Table extends BaseController
{
    public function index()
    {
        $data_view = [
            'judul' => 'Admin',
            'page_konten' => 'admin/table',
        ];

        $pesanan = new PaketModel;
        $data['pesanan'] = $pesanan->findAll();

        return $this->admin_template($data_view, $data);
    }

    public function delete($id) {
        $pesanan = new PaketModel;
        $pesanan->delete($id);

        return redirect()->to('admin');
    }
    
    public function status($id)
    {
        $pesanan = new PaketModel;
        
        $data = $pesanan->find($id);
    
        $status_sekarang  = $data['status'];
    
        if ($status_sekarang == 1) {
            $pesanan->update($id, ['status' => 0]);
        } else {
            $pesanan->update($id, ['status' => 1]);
        }
    
        return redirect()->to('admin');
    }

    public function kondisi($id)
    {
        $pesanan = new PaketModel;
        
        $data = $pesanan->find($id);
    
        $status_sekarang  = $data['kondisi'];
    
        if ($status_sekarang == 1) {
            $pesanan->update($id, ['kondisi' => 0]);
        } else {
            $pesanan->update($id, ['kondisi' => 1]);
        }
    
        return redirect()->to('admin');
    }

    public function deleteAll()
    {
        $pesanan = new PaketModel;
        $builder =  $pesanan->table('pesanan');
        $builder->truncate();

        return redirect()->to('admin');
    }

    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    
}