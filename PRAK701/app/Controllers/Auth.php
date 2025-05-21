<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)
                      ->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set('logged_in', true);
            $session->set('user', [
                'id'       => $user['id'],
                'username' => $user['username'],
            ]);
            return redirect()->to('/buku');
        } else {
            return redirect()->back()->with('error', 'Login gagal! Username, email, atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}