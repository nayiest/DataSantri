<?php

namespace App\Imports;

use App\Models\Santri;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ActivitiesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Santri([
            'nama' => $row['nama'],
            'alamat' => $row['alamat'],
            'tanggal_lahir' => $row['tanggal_lahir'],
        ]);
    }
}