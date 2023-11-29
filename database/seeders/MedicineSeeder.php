<?php

namespace Database\Seeders;

use App\Models\Medicine;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Medicine::create([
        //     'name' => 'Aspirin',
        //     'unit_id' => 1,
        //     'clinic_id' => 1,
        // ]);
        Medicine::factory()->count(10)->create();
    }
}
