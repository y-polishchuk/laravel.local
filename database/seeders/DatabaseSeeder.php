<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       DB::table('users')->insert([
           [
		'name' => Str::random(10),
		'surname'  => Str::random(10),
		'email'  => Str::random(5) . '@' . Str::random(7) . '.com',
           ],
           [
                'name' => Str::random(10),
                'surname'  => Str::random(10),
                'email'  => Str::random(5) . '@' . Str::random(7) . '.com',
           ],
           [
                'name' => Str::random(10),
                'surname'  => Str::random(10),
                'email'  => Str::random(5) . '@' . Str::random(7) . '.com',
           ],
	]);
    }
}
