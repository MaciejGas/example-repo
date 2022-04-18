<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'surname' => 'Adminowski',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'phone' => rand(100000000,1000000000),
            'is_admin' => 1,
            'status' =>'active',
        ]);

        DB::table('users')->insert([
            'name' => 'Client',
            'surname' => 'Clientowy',
            'email' => 'client@client.com',
            'password' => Hash::make('client@client.com'),
            'phone' => rand(100000000,1000000000),
            'is_admin' => 0,
            'status' =>'active',
        ]);

        DB::table('accessories')->insert([
            'name' => 'Igły',
            'amount' => 100,
            'safety_level' => 500,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Maseczki',
            'amount' => 50,
            'safety_level' => 200,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Tusze',
            'amount' => 90,
            'safety_level' => 100,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Rękawiczki',
            'amount' => 30,
            'safety_level' => 200,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Płyn_dezynfekcja',
            'amount' => 73,
            'safety_level' => 100,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Krem_gojenie',
            'amount' => 22,
            'safety_level' => 100,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Mydło',
            'amount' => 50,
            'safety_level' => 50,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Krem_znieczulenie',
            'amount' => 1,
            'safety_level' => 100,
        ]);

        DB::table('accessories')->insert([
            'name' => 'Kalki',
            'amount' => 432,
            'safety_level' => 500,
        ]);
        
        DB::table('accessories')->insert([
            'name' => 'Podstawki',
            'amount' => 47,
            'safety_level' => 100,
        ]);

        DB::table('contents')->insert([
            'name' => 'Pierwsza_sekcja',
            'content' => 'Text dla contentu strony głównej #1',
            'color' => 'primary',
        ]);

        DB::table('contents')->insert([
            'name' => 'Druga_sekcja',
            'content' => 'Text dla contentu strony głównej #2',
            'color' => 'success',
        ]);

        DB::table('contents')->insert([
            'name' => 'Trzecia_sekcja',
            'content' => 'Text dla contentu strony głównej #3',
            'color' => 'danger',
        ]);

        DB::table('contents')->insert([
            'name' => 'Czwarta_sekcja',
            'content' => 'Text dla contentu strony głównej #4',
            'color' => 'warning',
        ]);


        DB::table('events')->insert([
            'title' => 'Przykładowy 1',
            'start' => '2022-04-03 16:00:00',
            'end' => '2022-04-04 16:00:00',
            'client_id'=> '4',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'dłoń',
            'color' => 'nie', 
            'description'=> Str::random(50),
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('events')->insert([
            'title' => 'Przykładowy 2',
            'start' => date('Y-m-d H:i:s'),
            'end' => date('Y-m-d H:i:s'),
            'client_id'=> '12',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'lewa stopa',
            'color' => 'nie', 
            'description'=> Str::random(50),
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('events')->insert([
            'title' => 'Przykładowy 3',
            'start' => date('Y-m-d H:i:s'),
            'end' => date('Y-m-d H:i:s'),
            'client_id'=> '22',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'prawe ramie',
            'color' => 'nie', 
            'description'=> Str::random(50),
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('events')->insert([
            'title' => 'Przykładowy 4',
            'start' => '2022-04-02 16:00:00',
            'end' => '2022-04-02 16:00:00',
            'client_id'=> '7',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'lewe ramie',
            'color' => 'tak', 
            'description'=> Str::random(50),
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'client_id' => '3',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'plecy',
            'color' => 'tak', 
            'description'=> Str::random(50),
            'status'=> 'active',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'client_id' => '6',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'prawa łydka',
            'color' => 'nie', 
            'description'=> Str::random(50),
            'status'=> 'active',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'client_id' => '14',
            'width'=> rand(2,20),
            'height'=> rand(2,30),
            'place'=> 'przedramię',
            'color' => 'tak', 
            'description'=> Str::random(50),
            'status'=> 'active',
            'created_at'=> date('Y-m-d H:i:s'),
        ]);

        for ($i=0; $i < 20; $i++)
        {
            DB::table('messages')->insert([
                'client_id' => rand(2,20),
                'topic' => Str::random(10),
                'question' => Str::random(30),
                'status'=> 'active',
                'created_at'=> date('Y-m-d H:i:s'),
            ]);
        }

        for ($i=1; $i < 6; $i++)
        {
            DB::table('messages')->insert([
                'client_id' => 22,
                'topic' => Str::random(10),
                'question' => Str::random(50),
                'status'=> 'unactive',
                'created_at'=> date('Y-m-d H:i:s'),
            ]);
        }

        for ($i=21; $i < 27; $i++)
        {
            DB::table('answers')->insert([
                'message_id' => $i,
                'answer_body' => Str::random(70),
                'created_at'=> date('Y-m-d H:i:s'),
            ]);
        }     

    }
}
