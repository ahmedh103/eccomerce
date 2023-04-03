<?php

namespace App\Imports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Validators\ValidationException;
class DepartmentImport implements ToModel, WithHeadingRow, WithValidation
{

    private int $row_number = 1;

    public function model(array $row)
    {
        $this->row_number ++;

        Department::create([
           'name' => ['en' => $row['name_en'], 'ar' => $row['name_ar']],
           'slug' => $row['slug'],
           'image' => $row['image']
        ]);
    }
    /**
     * Fail import
     *
     * @param $key
     * @param $error
     * @param $row
     * @throws ValidationException
     */
    public function fail($key, $error, $row) {
        $failures[] = new Failure($this->row_number, $key, $error, $row);
        throw new \Maatwebsite\Excel\Validators\ValidationException(
            \Illuminate\Validation\ValidationException::withMessages($error),
            $failures
        );
    }
    public function headingRow(): int
    {
        return 1;
    }
    public function rules(): array
    {
        return Department::sheetRules();
    }
}
