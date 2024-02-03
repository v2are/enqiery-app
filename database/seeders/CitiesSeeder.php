<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cities;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::truncate();
        $cities=[
			['name'=>'Ariyalur'],
			['name'=>'Chennai'],
			['name'=>'Coimbatore'],
			['name'=>'Cuddalore'],
			['name'=>'Dharmapuri'],
			['name'=>'Dindigul'],
			['name'=>'Erode'],
			['name'=>'Kanchipuram'],
			['name'=>'Kanyakumari'],
			['name'=>'Karur'],
			['name'=>'Madurai'],
			['name'=>'Nagapattinam'],
			['name'=>'Nilgiris'],
			['name'=>'Namakkal'],
			['name'=>'Perambalur'],
			['name'=>'Pudukkottai'],
			['name'=>'Ramanathapuram'],
			['name'=>'Salem'],
			['name'=>'Sivaganga'],
			['name'=>'Tirupur'],
			['name'=>'Tiruchirappalli'],
			['name'=>'Theni'],
			['name'=>'Tirunelveli'],
			['name'=>'Thanjavur'],
			['name'=>'Thoothukudi'],
			['name'=>'Tiruvallur'],
			['name'=>'Tiruvarur'],
			['name'=>'Tiruvannamalai'],
			['name'=>'Vellore'],
			['name'=>'Viluppuram'],
			['name'=>'Virudhunagar'],
        ];
        foreach ($cities as $key => $value) {
            Cities::create($value);
        }
    }
}
