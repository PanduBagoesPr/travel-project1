<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FormCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 1; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('form_customers')->insert([
    			'name' => $faker->name,
    			'datebirth' => $faker->numberBetween(20,60),
    			'address' => $faker->address,
                'telp' => $faker->numberBetween(20,60),
                'city' =>$faker->city,
                'province' =>$faker->city
    		]);
 
    	}
    }
}
