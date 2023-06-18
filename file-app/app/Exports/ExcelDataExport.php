<?php

namespace App\Exports;

use App\Models\ExcelData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelDataExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExcelData::all()->makeHidden(['id', 'created_at', 'updated_at']);
    }

    //出力エクセルにヘッダー追加
    public function headings():array
    {
        return [
            '名前',
            '年齢',
            '誕生日'
        ];
    }
}
