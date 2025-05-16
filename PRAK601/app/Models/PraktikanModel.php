<?php

namespace App\Models;

use CodeIgniter\Model;

class PraktikanModel extends Model
{
        public function getBerandaData()
    {
        return [
            'nama' => 'Hai! Namaku Aliya Raffa Naura Ayu! NIM-ku 2310817120014. Yuk, kenalan lebih dekat!'
        ];
    }
        public function getProfilData()
    {
        return [
            'nama'   => 'Aliya Raffa Naura Ayu',
            'nim'    => '2310817120014',
            'prodi'  => 'Teknologi Informasi',
            'hobi'   => 'Mendengarkan Lagu, Menonton Film',
            'skill'  => 'Web-Dev, UI/UX, Desain',
            'gambar' => 'profil.jpg' 
        ];
    }
}
