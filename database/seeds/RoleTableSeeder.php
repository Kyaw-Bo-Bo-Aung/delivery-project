<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        DB::table('roles')->truncate();
        DB::statement("SET foreign_key_checks=1");
        $roles = ['admin', 'client', 'delivery_man'];

        	foreach ($roles as $rolename) {
        		$role = new Role;
        		$role->name = $rolename;
        		$role->save();
        	}
    }
}
