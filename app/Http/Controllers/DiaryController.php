<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    //
	 public function index()
    {
        // dd ('Hello World');
        // dump and die関数というlaravelに用意された関数
        // var_dumpとdieを組み合わせたもの
        // laravel開発の必須ツール

    		return view("diaries.index");
    		//view関数はresources/views/内にあるファイルを取得する関数
    		// view("ファイル名")もしくは
    		// view("フォルダ名.ファイル名")のように記述する
    		// ※ファイル名は.bladeの前のみ
    }

    public function create(){
    	return view("diaries.create");
    }
}
