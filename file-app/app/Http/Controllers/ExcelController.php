<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\ExcelExport;
use App\Exports\ExcelDataExport;

class ExcelController extends Controller
{
    //ページ表示用
    public function excel(){
        return view('excel');
    }

    //ページインポート用
    public function excelImport(){

        //ファイルが選択されていない場合
        if(request()->file('file') == false){
            return back()->with('importMessage', 'ファイルを選択してください');
        }

        Excel::import(new ExcelImport, request()->file('file'));
        return back()->with('importMessage', 'インポートが完了しました。');
    }

    //ページエクスポート用
    public function excelExport(){
        $date = date('Y-m-d H:i:s');
        return Excel::download(new ExcelDataExport, "$date.xlsx");
        // return Excel::download(new ExcelExport,"$date.xlsx");
    }
}
