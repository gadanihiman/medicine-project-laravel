<?php

namespace Database\Seeders;

use App\Models\MedicineIncoming;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineIncomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // MedicineIncoming::create([
        //     'medicine_id' => 1,
        //     'quantity' => 10,
        // ]);
        MedicineIncoming::factory()->count(10)->create();
    }
}
