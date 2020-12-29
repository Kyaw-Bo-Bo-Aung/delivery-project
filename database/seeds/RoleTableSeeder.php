<?php

use Illuminate\Database\Seeder;
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
        $roles = ['admin', 'client', 'delivery-men'];

        	foreach ($roles as $rolename) {
        		$role = new Role;
        		$role->name = $rolename;
        		$role->save();
        	}
    }
}
