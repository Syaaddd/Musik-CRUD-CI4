<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMusikTable extends Migration
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
            'playlist_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'artist' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'album' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'duration' => [
                'type' => 'TIME',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('playlist_id', 'playlists', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('musik');
    }

    public function down()
    {
        $this->forge->dropTable('musik');
    }
}
