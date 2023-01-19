<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class AdminUserSeeder extends Seeder
{

    public function run()
    {
        User::firstOrCreate(
            ['email' => 'xmicky@hotmail.fr'],
            ['name' => 'Mika0000', 'email' => 'xmicky@hotmail.fr',  'password' => bcrypt('123456'), 'role' => 'admin']);
       
    }
}
