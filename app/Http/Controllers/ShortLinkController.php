<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    //
    public function index(){
        $shortLink = ShortLink::all();
        return view('shortenlink', compact('shortLink'));
    }

    public function store( Request $request){

        $link = new ShortLink;

        // $request->validate([
        //     'link'=> 'required|url'
        // ]);
        // $input['link'] = $request->link;
        // $input['code'] = Str::random(6);
        $request->validate([
            'link'=> 'required|url'
        ]);
        $link->link = $request->link;
        $link->code = Str::random(6);

        // ShortLink::create($input);
        $link->save();

        return redirect('generate-shorten-link')->withSuccess('Shorten Link Generated Successfull') ;

    }

    public function shortenLink($code){
        
        $find = ShortLink::where('code','=', $code)->first();
        return redirect($find->link);
    }
}
