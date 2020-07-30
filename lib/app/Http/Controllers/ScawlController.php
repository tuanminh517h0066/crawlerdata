<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Header;
use DB;
use Goutte;

class ScawlController extends Controller
{
    //
    
    public function getWatch($id){
        //$data['watch'] = DB::table('product')->join('header','product.header_id','=','header.id_header')->where('id_header',$id)->get();
        //$data['list'] = DB::table('header')->where('id_header', $id)->find(url);
        //dd($list->url);
        //return view('backend.WatchDetail');
        //dd($data->url);
        $users = DB::table('header')
        ->where('id_header', $id)->get();
        
        
        //print($users);

        foreach ($users as $user)
        {
            $urls = $user->url;
            $id_head = $user->id_header;
        
            $bot = new \App\Scraper\phone();
            $bot->scrape($urls,$id_head);
            //print($urls);

            
        }
        //return back();
        

    }
    
}
