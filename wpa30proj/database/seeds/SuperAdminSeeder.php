<?php

use Illuminate\Database\Seeder;
use App\Backend;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Backend::create([
        	'name'	=> 'test',
        	'email'	=> 'test@gmail.com',
        	'password'	=> \Hash::make("123456")
        ]);
    }
}
