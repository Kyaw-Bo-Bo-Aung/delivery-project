<?php

use App\Status;
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
        Status::truncate();
        $statuses = ['requesting', 'got delivery-man', 'On the way'];

        	foreach ($statuses as $name) {
        		$status = new Status();
        		$status->name = $name;
        		$status->save();
        	}
    }
}
