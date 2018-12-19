<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'name'     => 'Israel',
			'lastname' => 'Arzate',
			'email'    => 'israelofevil@gmail.com',
			'password' => bcrypt('caty2cq/25'),
			'status'   => 1
        ]);
    }
}
