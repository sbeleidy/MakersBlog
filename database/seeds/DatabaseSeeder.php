<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Makersblog\Database\Seeds\PostTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(Makersblog\PostTableSeeder::class);
        $this->call(Makersblog\TagTableSeeder::class);

        Model::reguard();
    }
}
