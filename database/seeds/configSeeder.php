<?php

use App\Config;
use Illuminate\Database\Seeder;

class configSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
            'user_id'=>1,
        'ref_id'=>1,
        "name"=>'Ali',
        'UUID'=>"6193f2cd-cbfd-40d0-fec8-beb67dd5d8e6",
        "link"=>"vmess://ewogICJ2IjogIjIiLAogICJwcyI6ICJWTS1BbGkiLAogICJhZGQiOiAidS5teXNreWNsb3VkLnNwYWNlIiwKICAicG9ydCI6IDQ0MywKICAiaWQiOiAiNjE5M2YyY2QtY2JmZC00MGQwLWZlYzgtYmViNjdkZDVkOGU2IiwKICAiYWlkIjogMCwKICAibmV0IjogIndzIiwKICAidHlwZSI6ICJub25lIiwKICAidGxzIjogInRscyIsCiAgInBhdGgiOiAiL3NreSIsCiAgInNuaSI6ICJ1Lm15c2t5Y2xvdWQuc3BhY2UiLAogICJhbHBuIjogImgyLGh0dHAvMS4xIgp9",
        'worker_id'=>1,
        'configable_type'=>'App/MonthlyConfig',
        'configable_id'=>1,

            
        ]);
    }
}
