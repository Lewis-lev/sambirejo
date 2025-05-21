<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Login extends BaseController {

    public function index() {

        return view('login');
    }

    public function valid_login()
    {

        $adminModel = new AdminModel();

        $data = $this->request->getPost();
        $admin = $adminModel->where('username', $data['username'])->first();
        
        if($admin){

            if($admin['password'] != md5($data['password'])){
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('login');
            } else {
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $admin['username'],
                    'id' => $admin['user_id'],
                    ];
                session()->set($sessLogin);
                return redirect()->to('admin');
            }
        } else{
            session()->setFlashdata('error', 'Username salah');
            return redirect()->to('login');
        }
    }

    // public function proses_login() {
        
    //     $AdminModel = new \App\Models\AdminModel();
    //      $login = $this->request->getPost();
    //      if ($login) {
    //         $username = $this->request->getPost('username');
    //         $password = $this->request->getPost('password');
 
    //         if ($username == '' or $password == '') {
    //             $err = "Username dan password tidak boleh kosong";
    //         } else if (empty($err)) {
    //             $dataAdmin = $AdminModel->where("username", $username)->first;
    //             if ($dataAdmin['password'] != ($password)) {
    //                 $err = "Password salah";
    //             }
    //         } else {
    //             $dataSesi = [
    //                 'id' => $dataAdmin['id'],
    //                 'username' => $dataAdmin['username'],
    //                 'password' => $dataAdmin['password'],
    //             ];
    //             session()->set($dataSesi);

    //             return redirect()->to('table');
    //         }

    //         if ($err) {
    //             session()->setFlashdata('error', $err);
    //             return redirect()->to('login');
    //         }
    //      }
    // }
}
