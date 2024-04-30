<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        DB::table('users')->truncate();
        DB::statement("SET foreign_key_checks=1");
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
       	$user->assignRole('admin');
    }
}
