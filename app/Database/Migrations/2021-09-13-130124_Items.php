<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_barang'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_barang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'jumlah_barang'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_barang', true);
		$this->forge->createTable('items');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('items');
	}
}