<?php

namespace App\Exports;

use App\Models\Department;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DepartmentExport implements FromView, WithStyles, ShouldQueue
{

    public function view(): View
    {
        $departs = Department::get(['id', 'name', 'slug']);
        return \view('Admin.pages.department.export.departments', compact('departs'));
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'size' => 20]
            ]
        ];
    }
}
