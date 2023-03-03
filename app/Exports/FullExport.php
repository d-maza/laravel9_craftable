<?php

namespace App\Exports;

use App\Models\Full;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FullExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Full::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.full.columns.id'),
            trans('admin.full.columns.pacient_id'),
            trans('admin.full.columns.data_examen'),
            trans('admin.full.columns.data_examen_mod'),
        ];
    }

    /**
     * @param Full $full
     * @return array
     *
     */
    public function map($full): array
    {
        return [
            $full->id,
            $full->pacient_id,
            $full->data_examen,
            $full->data_examen_mod,
        ];
    }
}
