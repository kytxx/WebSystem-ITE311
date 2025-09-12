<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMigrationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'version' => [
                'type'       => 'BIGINT',
                'unsigned'   => true,
                'null'       => false,
                'auto_increment' => false,
                'primary'    => true,
            ],
            'group' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
                'default'    => 'default',
            ],
            'namespace' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
                'default'    => 'App\Database\Migrations',
            ],
        ]);
        $this->forge->addKey('version', true);
        $this->forge->createTable('migrations', true);
    }

    public function down()
    {
        $this->forge->dropTable('migrations');
    }
}
