<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact')->insert([
            'sujet' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'description' => text('some exemple description'),
        ]);
    }
}
