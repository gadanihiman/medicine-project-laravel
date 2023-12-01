<?php

namespace App\Repositories;

interface MedicineOutgoingRepositoryInterface
{
    /**
     * Get medicine outgoings
     *
     * @param array $params
     * @param int $id_clinic
     * @param bool $withRelationships
     * @return mixed
     */
    public function getMedicineOutgoings($params, $id_clinic, $withRelationships);
}
