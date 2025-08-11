<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //Instanciar el Modelo
        $user = new User();
        $user->name = "CJ";
        $user->email = "CJ@gmail.com";
        $user->password = "123456";

        $user->save();
    }
    
}
