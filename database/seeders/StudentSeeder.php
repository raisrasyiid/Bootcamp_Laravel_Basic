<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cara truncate data yang terhubung dengan foreign key dari tabel lain.
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // INPUT MANUAL
        // $data = [
        //     ['class_id' => 1, 'nis' => '21.21.1121', 'fullname' => 'Dini', 'gender' => 'P'],
        //     ['class_id' => 2, 'nis' => '21.21.1234', 'fullname' => 'Andy', 'gender' => 'L'],
        //     ['class_id' => 2, 'nis' => '21.13.2215', 'fullname' => 'Jhon', 'gender' => 'L'],
        //     ['class_id' => 3, 'nis' => '21.13.2225', 'fullname' => 'Dowson', 'gender' => 'L'],
        //     ['class_id' => 4, 'nis' => '21.13.2225', 'fullname' => 'Westen', 'gender' => 'P'],
        // ];
        // foreach ($data as $value) {
        //     Student::insert([
        //         'class_id' => $value['class_id'],
        //         'nis' => $value['nis'],
        //         'fullname' => $value['fullname'],
        //         'gender' => $value['gender'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }

        //MENGGUNAKAN FAKER
        Student::factory()->count(100)->create();
    }
}
