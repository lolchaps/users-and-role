<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory('App\User')->create()->each(function($u) {
            $u->assignRole(factory('App\Role')->create());
        });
    }
}
