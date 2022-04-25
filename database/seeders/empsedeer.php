<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class empsedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emp=
        [   
        ['Emp_Nss'=>'165070712345678','Emp_Nom'=>'pernet','Emp_Pm'=>'Henri','Emp_Tarif'=>'super special'],
        ['Emp_Nss'=>'175070712345678','Emp_Nom'=>'Grandet','Emp_Pm'=>'Marc','Emp_Tarif'=>'normal'],
        ['Emp_Nss'=>'280050512345678','Emp_Nom'=>'Barnier','Emp_Pm'=>'Nicole','Emp_Tarif'=>'special'],
        ];

        DB::table('employes')->insert($emp);
    }
}
