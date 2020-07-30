<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Header;
use App\Product;

class DetailController extends Controller
{
    //
    public function getDetail($id){
        $data['details'] =  DB::table('product')
        ->join('header','product.header_id','=','header.id_header')
        ->where('id_header',$id)->get();
        //dd($data);
        return view('backend.WatchDetail',$data);

    }
}
