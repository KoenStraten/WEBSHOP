<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'id' => 1,
            'label' => 'Home',
            'link' => '/',
            'icon' => 'gast',
            'parent_id' => 0,
            'order' => 1,
        ]);

        DB::table('menu')->insert([
            'id' => 2,
            'label' => 'Categorieën',
            'link' => '/../category/',
            'icon' => null,
            'parent_id' => 0,
            'order' => 2,
        ]);

        DB::table('menu')->insert([
            'id' => 3,
            'label' => 'Over ons',
            'link' => '/../about/',
            'icon' => null,
            'parent_id' => 0,
            'order' => 3,
        ]);

        DB::table('menu')->insert([
            'id' => 4,
            'label' => 'Auth::user()->name',
            'link' => '#',
            'icon' => null,
            'parent_id' => 0,
            'order' => 4,
        ]);

        DB::table('menu')->insert([
            'id' => 5,
            'label' => 'Inloggen',
            'link' => '/../login/',
            'icon' => null,
            'parent_id' => 0,
            'order' => 5,
        ]);


        DB::table('menu')->insert([
            'id' => 6,
            'label' => 'Registreren',
            'link' => '/../register/',
            'icon' => null,
            'parent_id' => 0,
            'order' => 6,
        ]);


        DB::table('menu')->insert([
            'id' => 7,
            'label' => 'Dashboard',
            'link' => '/../admin/dashboard/',
            'icon' => null,
            'parent_id' => 4,
            'order' => 4,
        ]);

        DB::table('menu')->insert([
            'id' => 8,
            'label' => 'Mijn account',
            'link' => '/../user/',
            'icon' => null,
            'parent_id' => 4,
            'order' => 4,
        ]);

        DB::table('menu')->insert([
            'id' => 9,
            'label' => 'Aankoopgeschiedenis',
            'link' => '#',
            'icon' => null,
            'parent_id' => 4,
            'order' => 4,
        ]);

        DB::table('menu')->insert([
            'id' => 10,
            'label' => 'Winkelwagen',
            'link' => '/../shoppincart/',
            'icon' => null,
            'parent_id' => 0,
            'order' => 10,
        ]);

        DB::table('menu')->insert([
            'id' => 11,
            'label' => 'Uitloggen',
            'link' => '/../logout/',
            'icon' => null,
            'parent_id' => 4,
            'order' => 11,
        ]);
    }
}
