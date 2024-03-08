<?php

namespace App\Controllers;
use App\Models\PaketModel;

class Status extends BaseController
{
    public function index()
{
    $data_view = [
        'judul' => 'Status',
        'page_konten' => 'admin/status',
    ];

    $pesanan = new PaketModel;
    $data['pesanan'] = $pesanan->where('status', 1)->findAll();

    return $this->admin_template($data_view, $data);
}
   
public function index1()
{
    $data_view = [
        'judul' => 'Status',
        'page_konten' => 'admin/status1',
    ];

    $pesanan = new PaketModel;
    $data['pesanan'] = $pesanan->where('status', 0)->findAll();

    return $this->admin_template($data_view, $data);
}

    public function delete($id) {
        $pesanan = new PaketModel;
        $pesanan->delete($id);

        return redirect()->to('status');
    }
    public function delete1($id) {
        $pesanan = new PaketModel;
        $pesanan->delete($id);

        return redirect()->to('status1');
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
    
        return redirect()->to('status');
    }
    public function status1($id)
    {
        $pesanan = new PaketModel;
        
        $data = $pesanan->find($id);
    
        $status_sekarang  = $data['status'];
    
        if ($status_sekarang == 1) {
            $pesanan->update($id, ['status' => 0]);
        } else {
            $pesanan->update($id, ['status' => 1]);
        }
    
        return redirect()->to('status1');
    }

    public function deleteAll()
    {
        $pesanan = new PaketModel;
        $builder =  $pesanan->table('pesanan');
        $builder->where('status', 1)->delete();

        return redirect()->to('status');
    }
    public function deleteAll1()
    {
        $pesanan = new PaketModel;
        $builder =  $pesanan->table('pesanan');
        $builder->where('status', 0)->delete();

        return redirect()->to('status1');
    }

    
}