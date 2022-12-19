<?php

namespace App\Exports;

use App\Models\mdlbuku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class bukuExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return mdlbuku::all();
    }

    public function headings(): array{
        return [
            'No',
            'ISBN',
            'Judul Buku',
            'Pengarang',
            'Penerbit',
            'Tahun Terbit',
            'Cetakan Ke',
            'Jumlah Halaman'
        ];
    }
}
