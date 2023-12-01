<?php

namespace App\Services;

use App\Repositories\MedicineOutgoingRepositoryInterface;

class MedicineOutgoingService
{
    protected $medicineOutgoingRepo;

    public function __construct(MedicineOutgoingRepositoryInterface $medicineOutgoingRepo)
    {
        $this->medicineOutgoingRepo = $medicineOutgoingRepo;
    }

    public function getMedicineOutgoings($params, $id_clinic)
    {
        $medicineOutgoings = $this->medicineOutgoingRepo->getMedicineOutgoings($params, $id_clinic, true);

        // return $medicineOutgoings;
        return $medicineOutgoings->map(function ($item) {
            return $this->transformMedicineOutgoing($item);
        });
    }

    protected function transformMedicineOutgoing($item)
    {
        return [
            'id' => $item->id,
            'id_medicine' => $item->id_medicine,
            'batch_no' => $item->batch_no,
            'exp_date' => $item->exp_date,
            'quantity' => $item->quantity,
            'date' => $item->date,
            'unit' => $item->unit ? $item->unit->only(['id', 'name']) : null,
            'medicine' => $item->medicine ? $item->medicine->only(['id', 'name']) : null,
        ];
    }
}
