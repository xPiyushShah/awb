<?php
namespace App\Database\Migrations;

class Faildull extends \CodeIgniter\Database\Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'   => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
                'primary_key'    => true,
            ],
            'name'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email'     => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'referid'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'amount'   => [
                'type'       => 'INT',
                'null'       => true,
            ],
            'wallet'   => [
                'type'       => 'DECIMAL',
                'constraint' => '50',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('fail');
    }

    public function down()
    {
        $this->forge->dropTable('fail');
    }
}
