<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'adminuser',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT), // hashed password
                'role'     => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'instructor1',
                'email'    => 'instructor@example.com',
                'password' => password_hash('instructor123', PASSWORD_DEFAULT),
                'role'     => 'instructor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'student1',
                'email'    => 'student@example.com',
                'password' => password_hash('student123', PASSWORD_DEFAULT),
                'role'     => 'student',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Use INSERT IGNORE to skip duplicates
        $values = [];
        foreach ($data as $row) {
            $values[] = "(" . $this->db->escape($row['username']) . ", " . $this->db->escape($row['email']) . ", " . $this->db->escape($row['password']) . ", " . $this->db->escape($row['role']) . ", " . $this->db->escape($row['created_at']) . ", " . $this->db->escape($row['updated_at']) . ")";
        }
        $this->db->query("INSERT IGNORE INTO users (username, email, password, role, created_at, updated_at) VALUES " . implode(', ', $values));
    }
}
