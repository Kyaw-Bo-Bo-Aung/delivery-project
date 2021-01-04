<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['requesting', 'got delivery-man', 'On the way'];

        	// foreach ($statuses as $name) {
        	// 	$status = new Status;
        	// 	$status->name = $name;
        	// 	$status->save();
        	}
    }
}
