<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'ambiente' => '16848906000109',
            'usuario' =>'SUPORTE',
            'password' =>bcrypt('1234'),
            'regexcluida' =>'0'
        ]);
    }
}
