<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Extra;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'pmr'],
            ['name' => 'voli'],
            ['name' => 'basket'],
            ['name' => 'futsal']
        ];

        foreach ($data as $value) {
            Extra::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
