<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class HomeController extends Controller
{
    //
    public function getHome(){
        $data['a'] = Header::all();
        return view('backend.basicPage',$data);
    }
    public function postHome(Request $request){
        $this->validate($request,[
            'urlname'=>'required|unique:header,url',
            'titlename'=>'required'
        ],[
            'urlname.unique'=>'url is already added.',
            'urlname.required'=>'Please, enter your url.',
            'titlename.required'=>'Please, enter your title.'


        ]);
        $user = new Header;
        $user->name = $request->titlename;
        $user->url = $request->urlname;
        $user->save();
        //dd($user);
        return back();
    }
}
