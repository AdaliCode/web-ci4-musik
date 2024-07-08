<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Song extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'singer' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'album' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'release' => [
                'type' => 'DATE',
            ],
            'minutes_duration' => [
                'type' => 'INT',
                'constraint' => 1,
            ],
            'seconds_duration' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('songs');
    }

    public function down()
    {
        $this->forge->dropTable('songs');
    }
}
