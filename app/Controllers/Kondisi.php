<?php

namespace App\Controllers;
use App\Models\PaketModel;

class Kondisi extends BaseController
{
    public function index()
    {
        $data_view = [
            'judul' => 'Kondisi',
            'page_konten' => 'admin/kondisi',
        ];

        $pesanan = new PaketModel;
        $data['pesanan'] = $pesanan->where('kondisi', 1)->findAll();

        return $this->admin_template($data_view, $data);
    }
    public function index1()
    {
        $data_view = [
            'judul' => 'Kondisi',
            'page_konten' => 'admin/kondisi1',
        ];

        $pesanan = new PaketModel;
        $data['pesanan'] = $pesanan->where('kondisi', 0)->findAll();

        return $this->admin_template($data_view, $data);
    }

    public function delete($id) {
        $pesanan = new PaketModel;
        $pesanan->delete($id);

        return redirect()->to('kunjungan');
    }
    public function delete1($id) {
        $pesanan = new PaketModel;
        $pesanan->delete($id);

        return redirect()->to('kunjungan1');
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
    
        return redirect()->to('kunjungan');
    }
    public function kondisi1($id)
    {
        $pesanan = new PaketModel;
        
        $data = $pesanan->find($id);
    
        $status_sekarang  = $data['kondisi'];
    
        if ($status_sekarang == 1) {
            $pesanan->update($id, ['kondisi' => 0]);
        } else {
            $pesanan->update($id, ['kondisi' => 1]);
        }
    
        return redirect()->to('kunjungan1');
    }
    public function deleteAll()
    {
        $pesanan = new PaketModel;
        $builder =  $pesanan->table('pesanan');
        $builder->where('kondisi', 1)->delete();

        return redirect()->to('kunjungan');
    }
    public function deleteAll1()
    {
        $pesanan = new PaketModel;
        $builder =  $pesanan->table('pesanan');
        $builder->where('kondisi', 0)->delete();

        return redirect()->to('kunjungan1');
    }


    
}