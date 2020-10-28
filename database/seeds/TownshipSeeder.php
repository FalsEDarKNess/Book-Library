<?php

use Illuminate\Database\Seeder;
use App\Township;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $township = ['Hlaing','Dagon','Mayangone'];
        foreach ($township as $row) {
        	Township::create(["name"=>$row]);
        }
    }
}
