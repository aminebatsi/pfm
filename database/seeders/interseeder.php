<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class interseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interven=
        [   
            ['Int_Emp_Nss'=>'165070712345678','Int_Par_Id'=>1,'Int_Debut'=>Carbon::create('2011','12','14'),'Int_Nb_Jours'=>5],
            ['Int_Emp_Nss'=>'165070712345678','Int_Par_Id'=>2,'Int_Debut'=>Carbon::create('2012','01','10'),'Int_Nb_Jours'=>3],
            ['Int_Emp_Nss'=>'165070712345678','Int_Par_Id'=>5,'Int_Debut'=>Carbon::create('2011','01','20'),'Int_Nb_Jours'=>6],
            ['Int_Emp_Nss'=>'175070712345678','Int_Par_Id'=>1,'Int_Debut'=>Carbon::create('2011','12','11'),'Int_Nb_Jours'=>3],
            ['Int_Emp_Nss'=>'175070712345678','Int_Par_Id'=>2,'Int_Debut'=>Carbon::create('2012','01','10'),'Int_Nb_Jours'=>3],
        ];

        DB::table('interventions')->insert($interven);
    }
}
