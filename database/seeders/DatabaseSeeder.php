<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //menjalankan seeder yang dibuat secara otomatis.
        // parent table harus diatas child tablenya.
        $this->call([
            ClassSeeder::class,
            StudentSeeder::class,
            ExtraSeeder::class,
            TeacherSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
