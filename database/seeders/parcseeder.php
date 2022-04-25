<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class parcseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terre=
        [
        ['Par_Nom'=>'Le Pre au Vent','Par_Lieu'=>'Arith','Par_Superficie'=>350,'Par_Prop'=>1],
        ['Par_Nom'=>'Le grand Verger','Par_Lieu'=>'Arith','Par_Superficie'=>300,'Par_Prop'=>2], 
        ['Par_Nom'=>'Plan des Bauges','Par_Lieu'=>'Montagary','Par_Superficie'=>220,'Par_Prop'=>1], 
        ['Par_Nom'=>'Les Pres Rus','Par_Lieu'=>'Arith','Par_Superficie'=>750,'Par_Prop'=>4],
        ['Par_Nom'=>'Lafosse','Par_Lieu'=>'Montagary','Par_Superficie'=>600,'Par_Prop'=>1],
        ];

        DB::table('parcelles')->insert($terre);
    }
}
