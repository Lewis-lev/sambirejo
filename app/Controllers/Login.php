<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function valid_login()
    {
        $rules = [
            'username' => 'required|max_length[100]',
            'password' => 'required|max_length[255]',
        ];

        if (! $this->validate($rules)) {
            session()->setFlashdata('error', 'Masukkan username dan password yang valid.');

            return redirect()->to(base_url('login'));
        }

        $username  = trim($this->request->getPost('username'));
        $password  = $this->request->getPost('password');
        $adminModel = new AdminModel();
        $admin      = $adminModel->where('username', $username)->first();

        if ($admin === null || ! $this->verifyAdminPassword($password, $admin['password'])) {
            session()->setFlashdata('error', 'Username atau password tidak valid.');

            return redirect()->to(base_url('login'));
        }

        if (preg_match('/\A[a-f0-9]{32}\z/i', $admin['password']) === 1) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            if ($passwordHash === false || ! $adminModel->update($admin['user_id'], ['password' => $passwordHash])) {
                log_message('error', 'Unable to upgrade the password hash for admin user ID ' . $admin['user_id']);
            }
        }

        session()->regenerate(true);
        session()->set([
            'isLogin' => true,
            'username' => $admin['username'],
            'id' => $admin['user_id'],
        ]);

        return redirect()->to(base_url('admin'));
    }

    private function verifyAdminPassword(string $password, string $storedPassword): bool
    {
        if (preg_match('/\A[a-f0-9]{32}\z/i', $storedPassword) === 1) {
            return hash_equals(strtolower($storedPassword), md5($password));
        }

        return password_verify($password, $storedPassword);
    }
}
