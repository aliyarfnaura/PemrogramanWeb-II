<?php

namespace App\Controllers;

use App\Models\PraktikanModel;

class Home extends BaseController
{
    public function index(): string
    {
        // Halaman Beranda (default)
        $model = new PraktikanModel();
        $data['title'] = 'Beranda';
        $data['praktikan'] = $model->getBerandaData();

        return view('layout/template', [
            'title' => $data['title'],
            'content' => view('pages/beranda', $data)
        ]);
    }

public function profil(): string
{
    $model = new PraktikanModel();
    $data['title'] = 'Profil';
    $data['profil'] = $model->getProfilData();

    return view('layout/template', [
        'title' => $data['title'],
        'content' => view('pages/profil', $data)
    ]);
}

}
