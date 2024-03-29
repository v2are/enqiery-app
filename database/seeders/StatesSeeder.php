<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\States;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        States::truncate();
        $states=[
			['name'=>'Andhra Pradesh'],
			['name'=>'Arunachal Pradesh'],
			['name'=>'Assam'],
			['name'=>'Bihar'],
			['name'=>'Chhattisgarh'],
			['name'=>'Goa'],
			['name'=>'Gujarat'],
			['name'=>'Haryana'],
			['name'=>'Himachal Pradesh'],
			['name'=>'Jammu and Kashmir'],
			['name'=>'Jharkhand'],
			['name'=>'Karnataka'],
			['name'=>'Kerala'],
			['name'=>'Madhya Pradesh'],
			['name'=>'Maharashtra'],
			['name'=>'Manipur'],
			['name'=>'Meghalaya'],
			['name'=>'Mizoram'],
			['name'=>'Nagaland'],
			['name'=>'Odisha'],
			['name'=>'Punjab'],
			['name'=>'Rajasthan'],
			['name'=>'Sikkim'],
			['name'=>'Tamil Nadu'],
			['name'=>'Telangana'],
			['name'=>'Tripura'],
			['name'=>'Uttarakhand'],
			['name'=>'Uttar Pradesh'],
			['name'=>'West Bengal'],
			['name'=>'Andaman and Nicobar Islands'],
			['name'=>'Chandigarh'],
			['name'=>'Dadra and Nagar Haveli'],
			['name'=>'Daman and Diu'],
			['name'=>'Delhi'],
			['name'=>'Lakshadweep'],
			['name'=>'Puducherry'],

        ];
		
        foreach ($states as $key => $value) {
            States::create($value);
        }
    }
}
