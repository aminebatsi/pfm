<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tarifseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tar=
        [   
        ['Tar_Eur'=>60,'tar_Description'=>'mi-temps'],
        ['Tar_Eur'=>110,'tar_Description'=>'normal'],
        ['Tar_Eur'=>115,'tar_Description'=>'special'],
        ['Tar_Eur'=>119,'tar_Description'=>'super special'],
        ];

        DB::table('tarifs')->insert($tar);
    }
}
