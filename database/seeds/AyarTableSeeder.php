<?php

use App\Ayar;
use Illuminate\Database\Seeder;

class AyarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ayar::create(["name"=>"title","value"=>"Yazılım Dünyası"]);
        Ayar::create(["name"=>"author","value"=>"Sezer Esim"]);
        Ayar::create(["name"=>"description","value"=>"Az ye çok çalış"]);
        Ayar::create(["name"=>"keywords","value"=>"yazılım,php,java"]);
        Ayar::create(["name"=>"facebook","value"=>"Sezer Esim"]);
        Ayar::create(["name"=>"twitter","value"=>"Sezer Esim"]);
        Ayar::create(["name"=>"github","value"=>"Sezer Esim"]);
    
    
    
    
    }
}
