<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'iago',
            'email' => 'iago.@gmail.com',
            'password' => bcrypt('iago5568'),
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 12.34,
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 1.3,
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 19.34,
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 19.34,
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 19.34,
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 19.34,
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'price' => 19.34,
        ]);
    }
}
