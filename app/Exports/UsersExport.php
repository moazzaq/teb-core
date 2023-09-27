<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMapping;
use Yajra\DataTables\Exports\DataTablesCollectionExport;

class UsersExport extends DataTablesCollectionExport implements WithMapping
{
    public function headings(): array
    {
        return [
            'Name',
            'Email',
        ];
    }

    public function map($row): array
    {
        return [
            $row['name'],
            $row['email'],
        ];
    }
}
