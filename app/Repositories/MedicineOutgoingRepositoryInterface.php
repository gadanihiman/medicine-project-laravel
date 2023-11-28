<?php

namespace App\Repositories;

interface MedicineOutgoingRepositoryInterface
{
    public function getMedicineOutgoings($params, $id_clinic);
}
