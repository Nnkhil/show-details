<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Practice;
use Illuminate\Support\Facades\DB;


class PracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('practices')->insert([
        //     'username' => 'nikhil',
        //     'email' => 'nikhil@exampe.com',
           
        // ]);
        Practice::factory()->count(5)->create();
    }
} 
