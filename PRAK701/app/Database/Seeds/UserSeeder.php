<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('user')->truncate(); 

        $data = [
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'email'    => 'admin@example.com',
        ];

        $this->db->table('user')->insert($data);
        echo "Data admin berhasil ditambahkan.\n";
    }
}