<?php

namespace App\Filters;

use App\Models\AdminModel;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterLogin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $adminId = filter_var(session()->get('id'), FILTER_VALIDATE_INT);

        if (session()->get('isLogin') !== true || $adminId === false || $adminId < 1) {
            session()->destroy();

            return redirect()->to(base_url('login'));
        }

        if ((new AdminModel())->find($adminId) === null) {
            session()->destroy();

            return redirect()->to(base_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}