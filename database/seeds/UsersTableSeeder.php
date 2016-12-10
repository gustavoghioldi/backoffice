<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('users')->insert([
            'name' => 'Gustavo Ghioldi',
            'email' => 'gustavoghioldi@gmail.com',
            'password' => '$2y$10$2ThtHqDn5O6b0ZiKhZ6.5.o8dah3u07MUUY/hTK40Akz3RZ8CA0c2',
        ]);
    }
}
