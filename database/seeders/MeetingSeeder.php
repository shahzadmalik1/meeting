<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meeting')->insert([
            'subject' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => Str::random(15),
            // 'start_date' => Carbon::parse('2022-11-08'), 
            'start_date' =>  Carbon::now()->format('Y-m-d'),
            'end_date' => Carbon::now()->format('Y-m-d'),
            'start_time' => Carbon::now()->format('H:i:s'),
            'end_time' => Carbon::now()->format('H:i:s'),
        ]);
    }
}
