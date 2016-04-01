<?php

use Illuminate\Database\Seeder;

class SavingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	DB::table('savings')->insert(
        	[
            'code' => 7,
            'amount' => 100000,
            'description' => 'Cash on Bank',
            'category' => 'asset'
        	]
        );
     	DB::table('savings')->insert(
	    	[
            'code' => 7,
            'amount' =>  20000,
            'description' => 'Bills',
            'category' => 'expense'
        	]
        );   //

    }
}
