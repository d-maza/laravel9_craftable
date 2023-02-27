<?php

namespace App\Exports;

use App\Models\Pacient;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PacientExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Pacient::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.pacient.columns.id'),
            trans('admin.pacient.columns.nom'),
            trans('admin.pacient.columns.cognoms'),
            trans('admin.pacient.columns.telefon'),
            trans('admin.pacient.columns.curs_escolar'),
            trans('admin.pacient.columns.data_naixement'),
            trans('admin.pacient.columns.sex'),
            trans('admin.pacient.columns.esports'),
            trans('admin.pacient.columns.fecha'),
            trans('admin.pacient.columns.referidor'),
        ];
    }

    /**
     * @param Pacient $pacient
     * @return array
     *
     */
    public function map($pacient): array
    {
        return [
            $pacient->id,
            $pacient->nom,
            $pacient->cognoms,
            $pacient->telefon,
            $pacient->curs_escolar,
            $pacient->data_naixement,
            $pacient->sex,
            $pacient->esports,
            $pacient->fecha,
            $pacient->referidor,
        ];
    }
}
