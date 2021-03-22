<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_category')->insert([
        	[
                'name_category'=>'Loa máy',
                'avatar'=>'/public/image/Speaker/loa1.jpg',
        	],
        	[
                'name_category'=>'Bàn ghế',
                'avatar'=>'/public/image/Table/ban1.jpeg',
            ],
        	[
                'name_category'=>'Bánh kem',
                'avatar'=>'/public/image/Cake/cake3.jpg',
            ],
        	[
                'name_category'=>'Vật dụng trang trí',
                'avatar'=>'/public/image/trangtri/tri3.jpg',
            ],
        	[
                'name_category'=>'Bánh kem',
                'avatar'=>'/public/image/trangtri/tri3.jpg',
            ]
        ]);
    }
}
