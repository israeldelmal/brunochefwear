<?php

use Illuminate\Database\Seeder;

class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header')->insert([
			'h1'         => 'Bruno',
			'sub'        => 'Chef Wear',
			'p'          => 'Diseño, fabricación y venta/comercialización
							de uniformes gastronómicos',
			'img'        => 'fondo.jpg',
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
