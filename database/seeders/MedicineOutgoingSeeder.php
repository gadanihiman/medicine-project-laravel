<?php

namespace Database\Seeders;

use App\Models\MedicineOutgoing;
use Illuminate\Database\Seeder;

class MedicineOutgoingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // MedicineOutgoing::create([
        //     'medicine_id' => 1,
        //     'unit_id' => 1,
        //     'batch_no' => '1234567890',
        //     'exp_date' => '2021-12-31',
        //     'quantity' => 5,
        //     'date' => '2021-01-01',
        // ]);
        MedicineOutgoing::factory()->count(10)->create();
    }
}
