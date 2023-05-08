<?php

namespace App\Services;

use App\Models\Material;

class MaterialService extends Service
{
    protected $material;
    public function __construct(Material $material)
    {
        $this->material = $material;
    }

    public function getOne($value, $column = 'kode')
    {
        return $this->material->where($column, $value)->first();
    }

    public function searchMaterial($params)
    {
        $material = $this->material;

        $kode = $params['kode'] ?? '';
        if($kode !== '') $kode = $kode->where('kode', 'like', "%$kode%");

        return $this->searchResponse($params, $material);
    }

    public function material()
    {
        $result = [];
        foreach ($this->searchMaterial([]) as $value) $result[$value->kode] = $value->kode;
        return $result;
    }
}
