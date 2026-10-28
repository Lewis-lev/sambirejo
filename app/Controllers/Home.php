<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data_view = [
            'judul' => 'Sambirejo',
            'page_konten' => 'user/index',
        ];

        return $this->user_template($data_view, []);
    }

    public function contact()
    {
        $data_view = [
            'judul' => 'Kontak',
            'page_konten' => 'user/contact',
        ];

        return $this->user_template($data_view, []);
    }

    public function lokasi()
    {
        $data_view = [
            'judul' => 'Jelajahi',
            'page_konten' => 'user/lokasi',
        ];

        return $this->user_template($data_view, []);
    }

    public function profile()
    {
        $data_view = [
            'judul' => 'Cerita Sambirejo',
            'page_konten' => 'user/profile',
        ];

        return $this->user_template($data_view, []);
    }

    public function simulasi()
    {
        $data_view = [
            'judul' => 'Rencana perjalanan',
            'page_konten' => 'user/simulasi',
        ];

        return $this->user_template($data_view, []);
    }

    public function prototype()
    {
        $data_view = [
            'judul' => 'Profile',
            'page_konten' => 'user/profile',
        ];

        return $this->user_template($data_view, []);
    }

    

}