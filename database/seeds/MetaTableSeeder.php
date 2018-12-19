<?php

use Illuminate\Database\Seeder;

class MetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metadata')->insert([
            'title'       => 'Bruno | Chef Wear',
            'description' => 'Fabricantes de la mejor calidad y diseño en uniformes para chef en México. Todo lo que necesitas para uniformar a tu equipo ahora en Chihuahua.',
            'keywords'    => 'Chef, Chihuahua, Filipinas',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s")
        ]);
    }
}
