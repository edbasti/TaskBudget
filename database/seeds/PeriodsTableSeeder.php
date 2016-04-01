<?php

use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert(
        	[
            'description' => 'January 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'January 16-31'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'February 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'February 16-28'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'March 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'March 16-31'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'April 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'April 16-30'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'May 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'May 16-31'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'June 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'June 16-30'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'July 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'July 16-31'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'August 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'August 16-31'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'September 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'September 16-30'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'October 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'October 16-31'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'November 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'November 16-30'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'December 1-15'
        	]
        );
        DB::table('periods')->insert(	[
            'description' => 'December 16-31'
        	]
        );
    }
}
