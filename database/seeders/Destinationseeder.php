<?php

namespace Database\Seeders;

use App\Models\Destination;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Destinationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name'=>"Taplau",
            'description'=>"Dekat dengan kos paulingggg",
            'location'=>"Jalan Samudera, Kecamatan Padang Barat, Kota Padang, Sumatera Barat",
            'working_days'=>"24/7",
            'working_hours'=>"08.00-18.00",
            'ticket_price'=>"50000",
        ]);

        Destination::create([
            'name'=>"Jembatan Leton",
            'description'=>"Tempat para lelek",
            'location'=>"sudirman",
            'working_days'=>"senin-minggu",
            'working_hours'=>"08.00-20.00",
            'ticket_price'=>"50000",
        ]);

        Destination::create([
            'name'=>"kolam renang pak andrianto",
            'description'=>"kolam renang dengan konsep dalamnya ada ikan hiu",
            'location'=>"tokyo",
            'working_days'=>"bulan ramadhan",
            'working_hours'=>"ba'da subuh",
            'ticket_price'=>"1000",
        ]);
        
        Destination::create([
            'name'=>"pantai nirwana",
            'description'=>"identik dengan pohon kelapa",
            'location'=>"padang",
            'working_days'=>"s",
            'working_hours'=>"24/7",
            'ticket_price'=>"20000",
        ]);

        Destination::create([
            'name'=>"pantai caroline",
            'description'=>"identik dengan umang",
            'location'=>"padang",
            'working_days'=>"senin-minggu",
            'working_hours'=>"24/7",
            'ticket_price'=>"15000",
        ]);

        Destination::create([
            'name'=>"candi borobudur",
            'description'=>"Candi Buddha terbesar di dunia dengan arsitektur megah dan relief bersejarah",
            'location'=>"magelang",
            'working_days'=>"setiap hari",
            'working_hours'=>"06.30-17.30",
            'ticket_price'=>"50000",
        ]);
        for ($i = 0; $i <= 5000; $i++){
            Destination::create([
            'name'=>fake ("id_ID")->name(),
            'description'=>fake("id_ID")->sentence(),
            'location'=>fake ("id_ID")->address(). ",Pekanbaru, Riau",
            'working_days'=>"Everyday",
            'working_hours'=>"8 am - 5pm",
            'ticket_price'=>rand(1000, 5000),
            ]);
        }
    }

}
