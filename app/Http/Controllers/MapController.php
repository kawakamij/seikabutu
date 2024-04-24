<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Console\Commands\map;

class MapController extends Controller
{
   
    public function index()
    {
        return view('map');  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
