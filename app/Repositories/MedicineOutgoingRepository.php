<?php

namespace App\Repositories;

use App\Models\MedicineOutgoing;
use Illuminate\Database\Eloquent\Builder;

class MedicineOutgoingRepository implements MedicineOutgoingRepositoryInterface
{
    public function getMedicineOutgoings($params, $id_clinic)
    {
        $query = MedicineOutgoing::query();

        $query->with(['medicine', 'unit']);

        if ($id_clinic) {
            $query->whereHas('medicine', function (Builder $q) use ($id_clinic) {
                $q->where('id_clinic', $id_clinic);
            });
        }

        // Apply filters
        if (!empty($params['q'])) {
            $query->whereHas('medicine', function (Builder $q) use ($params) {
                $q->where('name', 'LIKE', '%' . $params['q'] . '%');
            });
        }

        // Handle 'is_dpho' filter
        if (isset($params['is_dpho'])) {
            $query->whereHas('medicine', function (Builder $q) use ($params) {
                if ($params['is_dpho'] == 'true') {
                    $q->whereNotNull('kode_dpho');
                } elseif ($params['is_dpho'] == 'false') {
                    $q->whereNull('kode_dpho');
                }
            });
        }

        // Date range filtering
        if (!empty($params['from_date']) && !empty($params['to_date'])) {
            $query->whereBetween('date', [$params['from_date'], $params['to_date']]);
        }

        // Ordering
        $orderBy = $params['orderby'] ?? 'date';
        $orderType = $params['ordertype'] ?? 'desc';
        $query->orderBy($orderBy, $orderType);

        // Pagination
        return !empty($params['per_page']) 
            ? $query->paginate($params['per_page']) 
            : $query->get();
    }
}