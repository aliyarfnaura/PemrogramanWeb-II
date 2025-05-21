<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Login terlebih dahulu!');
        }

        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required|string|is_unique[buku.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah ada, silakan masukkan judul yang berbeda.'
                ]
            ],
            'penulis' => [
                'label' => 'Penulis',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis harus diisi.'
                ]
            ],
            'penerbit' => [
                'label' => 'Penerbit',
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit harus diisi.'
                ]
            ],
            'tahun_terbit' => [
                'label' => 'Tahun Terbit',
                'rules' => 'required|numeric|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'numeric' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih dari 1800.',
                    'less_than' => 'Tahun terbit harus kurang dari 2024.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $model = new BukuModel();
        $model->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $buku = $model->find($id);

        if (!$buku) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Buku dengan ID $id tidak ditemukan.");
        }

        $data['buku'] = $buku;
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $model = new BukuModel();
        $buku = $model->find($id);
        if (!$buku) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Buku dengan ID $id tidak ditemukan.");
        }

        $model->save([
            'id' => $id,
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $buku = $model->find($id);
        if (!$buku) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Buku dengan ID $id tidak ditemukan.");
        }
        $model->delete($id);

        return redirect()->to('/buku')->with('success', 'Buku berhasil dihapus.');
    }
}
