<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        \App\User::create([
            'name' => $faker->name,
            'email' => 'user1@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('abc123'),
        ]);

        \App\User::create([
            'name' => $faker->name,
            'email' => 'user2@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('abc123'),
        ]);
    }
}
