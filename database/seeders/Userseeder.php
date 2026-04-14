<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"zhio",
            'email'=>"aprizhio@gmail.com",
            'password'=>"$2y$12$.amn.1UboBz1w9wD7ZQcve.GBPr9Yrs0tUOzNmr4ByUBfcfeoK0bW",
            
        ]);

        User::create([
            'name'=>"markos",
            'email'=>"Markos@gmail.com",
            'password'=>'$2y$12$Q895mAqVgnu5hZTRs8Jh3OFppxoP51MuxYKSA7vrbtFy.h2iiw/n.',
        ]);
        for ($i = 0; $i <= 100; $i++){
            User::create([
            'name'=>fake ("id_ID")->name(),
            'email'=>fake("id_ID")->email(),
            'password'=>fake ("id_ID")->password(). ",Pekanbaru, Riau",
            ]);
        }
    }

}
