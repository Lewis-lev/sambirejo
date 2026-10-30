<?php

namespace App\Filters;

use App\Models\AdminModel;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterLogout implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $adminId = filter_var(session()->get('id'), FILTER_VALIDATE_INT);

        if (
            session()->get('isLogin') === true
            && $adminId !== false
            && $adminId > 0
            && (new AdminModel())->find($adminId) !== null
        ) {
            return redirect()->to(base_url('admin'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}