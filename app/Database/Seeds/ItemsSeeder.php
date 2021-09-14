<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ItemsSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_barang'          =>  'Meja',
				'jumlah_barang' =>  '3',
				'created_at' => Time::now()
			],
			[
				'nama_barang'          =>  'Kursi',
				'jumlah_barang' =>  '6',
				'created_at' => Time::now()
			],
			[
				'nama_barang'          =>  'Buku',
				'jumlah_barang' =>  '12',
				'created_at' => Time::now()
			]
		];
		$this->db->table('items')->insertBatch($data);
	}
}