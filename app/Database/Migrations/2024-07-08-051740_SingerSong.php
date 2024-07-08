<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SingerSong extends Migration
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
            'singer_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'constraint' => 11,
            ],
            'song_id' => [
                'unsigned'   => true,
                'constraint' => 11,
                'type'       => 'INT',
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
        $this->forge->addForeignKey('song_id', 'songs', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('singer_id', 'singers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('singer_songs');
    }

    public function down()
    {
        $this->forge->dropTable('singer_songs');
    }
}
