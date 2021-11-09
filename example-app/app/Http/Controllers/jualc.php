<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\jual;

class jualc extends Controller
{
    public function index(){
        $jual=jual::select("CategoryName",
        DB::raw("count(ProdukName) as Count"))
        ->groupBy("CategoryName")
        ->get();
        // @dd($jual);
        $arr[]=['Kategori','Jumlah'];
        foreach($jual as $q => $value){
            $arr[++$q]=[$value->CategoryName,(int)$value->Count] ;
        }
        return view("laravel")->with("jual",json_encode($arr));
    }
}
