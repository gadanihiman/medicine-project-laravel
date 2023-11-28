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
        return $this->medicineOutgoingRepo->getMedicineOutgoings($params, $id_clinic);
    }
}
