<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;

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
}
