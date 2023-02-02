<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            ['kab_kota'=>'Kab. Malang',
            'name'=>'SMP PGRI 03 KARANGPLOSO',
            'username'=>'20517569',
            'password'=>bcrypt('20517569'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Probolinggo',
            'name'=>'SMKS DARUL FALAH',
            'username'=>'20553248',
            'password'=>bcrypt('20553248'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Sampang',
            'name'=>'SMPS ISLAM MAMBAUL ULUM TAMBELANGAN',
            'username'=>'20574781',
            'password'=>bcrypt('20574781'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Probolinggo',
            'name'=>'SMAS HAYATUL ISLAM',
            'username'=>'69757344',
            'password'=>bcrypt('69757344'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Probolinggo',
            'name'=>'SMP ISLAM MISBAHUL ULUM',
            'username'=>'69985579',
            'password'=>bcrypt('69985579'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Sampang',
            'name'=>'SMPS ISLAM HIDAYATUL MUTTAQIN',
            'username'=>'69986958',
            'password'=>bcrypt('69986958'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Probolinggo',
            'name'=>'SMP AL KHOZINIYAH',
            'username'=>'69989471',
            'password'=>bcrypt('69989471'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Jember',
            'name'=>'MA DARUSSALAM',
            'username'=>'69993201',
            'password'=>bcrypt('69993201'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Sidoarjo',
            'name'=>'SMP UNGGULAN ALFA SALAM',
            'username'=>'70005490',
            'password'=>bcrypt('70005490'),
            'jabatan'=>'lembaga' ],

            ['kab_kota'=>'Kab. Pamekasan',
            'name'=>'MTSS AL-INAYAH',
            'username'=>'20583444',
            'password'=>bcrypt('20583444'),
            'jabatan'=>'lembaga' ],         
            ];

            foreach($user as $key => $value){
                User::create($value);
            }


    }
}
