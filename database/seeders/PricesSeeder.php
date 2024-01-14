<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            'name' => 'ACADEMIA TIR S.L.',
            'email' => '',
            'phone' => '937160991',
            'website' => '',
            'zipcode' => '08206',
            'coop' => 'silver',
            'license' => 'B',
            'product' => 2,
            'books' => 'Yes',
            'tests' => 'Yes',
            'onsite' => 'Yes',
            'online' => 'Yes',
            'practical' => 'Yes',
            'numberOfPractical' => 10,
            'price' => 150,
            'extraLesson' => 25,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

        ]);

        DB::table('prices')->insert([
            'name' => 'Academia palau',
            'email' => '',
            'phone' => '',
            'website' => '',
            'zipcode' => '08206',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books' => 'Yes',
            'tests' => 'Yes',
            'onsite' => 'Yes',
            'online' => 'Yes',
            'practical' => 'Yes',
            'numberOfPractical' => 15,
            'price' => 200,
            'extraLesson' => 24,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'armand palau academias',
            'email' => '',
            'phone' => '',
            'website' => '',
            'zipcode' => '08206',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books'=> 'No',
            'tests'=> 'No',
            'onsite'=> 'No',
            'online'=> 'No',
            'practical'=> 'No',
            'numberOfPractical' => 10,
            'price' => 225,
            'extraLesson' => 23,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'academia sancu',
            'email' => '',
            'phone' => '',
            'website' => '',
            'zipcode' => '08206',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books'=> 'No',
            'tests'=> 'No',
            'onsite'=> 'No',
            'online'=> 'No',
            'practical'=> 'No',
            'numberOfPractical' => 12,
            'price' => 200,
            'extraLesson' => 22,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'ACCION',
            'email' => 'manoli_cano@hotmail.com',
            'phone' => '957255431',
            'website' => 'http://www.autoescuelasaccion.com',
            'zipcode' => '14010',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books' => 'Yes',
            'tests' => 'Yes',
            'onsite' => 'Yes',
            'online' => 'Yes',
            'practical' => 'Yes',
            'numberOfPractical' => 15,
            'price' => 250,
            'extraLesson' => 21,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'san cugat',
            'email' => '',
            'phone' => '',
            'website' => '',
            'zipcode' => '14010',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books' => 'Yes',
            'tests' => 'Yes',
            'onsite' => 'Yes',
            'online' => 'Yes',
            'practical' => 'Yes',
            'numberOfPractical' => 10,
            'price' => 220,
            'extraLesson' => 20,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'san cucu',
            'email' => '',
            'phone' => '',
            'website' => '',
            'zipcode' => '14010',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books'=> 'No',
            'tests'=> 'No',
            'onsite'=> 'No',
            'online'=> 'No',
            'practical'=> 'No',
            'numberOfPractical' => 10,
            'price' => 200,
            'extraLesson' => 19,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'boadilla',
            'email' => '',
            'phone' => '',
            'website' => '',
            'zipcode' => '14010',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books'=> 'No',
            'tests'=> 'No',
            'onsite'=> 'No',
            'online'=> 'No',
            'practical'=> 'No',
            'numberOfPractical' => 15,
            'price' => 210,
            'extraLesson' => 18,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'ACTIVA-T',
            'email' => 'josemaria-65@hotmail.com',
            'phone' => '677560308',
            'website' => '',
            'zipcode' => '41500',
            'coop' => 'gold',
            'license' => 'B',
            'product' => 2,
            'books' => 'Yes',
            'tests' => 'Yes',
            'onsite' => 'Yes',
            'online' => 'Yes',
            'practical' => 'Yes',
            'numberOfPractical' => 13,
            'price' => 207,
            'extraLesson' => 17,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('prices')->insert([
            'name' => 'ADAIZ',
            'email' => 'aeadaiz@yahoo.es',
            'phone' => '916119884',
            'website' => '',
            'zipcode' => '28917',
            'coop' => 'null',
            'license' => 'B',
            'product' => 2,
            'books' => 'Yes',
            'tests' => 'Yes',
            'onsite' => 'Yes',
            'online' => 'Yes',
            'practical' => 'Yes',
            'numberOfPractical' => 15,
            'price' => 204,
            'extraLesson' => 16,
            'status' => 'Yes',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

    }
}
