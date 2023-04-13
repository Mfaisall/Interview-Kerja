<?php

namespace App\Exports;

use App\Models\Interview;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InterviewExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Interview::with('respon')->orderBy('created_at', 'DESC')->get();
    }

    public function headings(): array
    {
        return[
            'name',
            'email',
            'age',
            'no_telp',
            'last_education',
            'education_name',
            'status',
            'date',
        ];
    }

    public function map($item): array
    {
        return[
            $item->name,
            $item->email,
            $item->age,
            $item->no_telp,
            $item->last_education,
            $item->education_name,
            $item->respon ?  $item->respon['status'] : '-',
            $item->respon ? $item->respon['date'] : '-',
        ];
    }

}
