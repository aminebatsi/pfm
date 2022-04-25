<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agrseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agr =
            [
                ['Agr_Nom' => 'Dulhac', 'Agr_Prenom' => 'Anne-Marie', 'Agr_Resid' => 'Arith'],
                ['Agr_Nom' => 'Martoz', 'Agr_Prenom' => 'Christian', 'Agr_Resid' => 'Montargy'],
                ['Agr_Nom' => 'Carrez', 'Agr_Prenom' => 'Francois', 'Agr_Resid' => 'Arith'],
                ['Agr_Nom' => 'Ferrer', 'Agr_Prenom' => 'Mariette', 'Agr_Resid' => 'Lenoyer'],
                ['Agr_Nom' => 'Mernaz', 'Agr_Prenom' => 'Francine', 'Agr_Resid' => 'Lescheraines'],
                ['Agr_Nom' => 'Martoz', 'Agr_Prenom' => 'Christian', 'Agr_Resid' => 'Lescheraines'],


            ];

        DB::table('agriculteurs')->insert($agr);
    }
}
