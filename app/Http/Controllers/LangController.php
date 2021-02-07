<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setRu(Request $request){
        $url = str_replace('/en', '/ru', request()->headers->get('referer'));

        if (strpos($url, 'blog')){
            $url = '/ru/blog';
        }

        return redirect($url);
    }

    public function setEn(){
        $url = str_replace('/ru', '/en', request()->headers->get('referer'));

        if (strpos($url, 'blog')){
            $url = '/en/blog';
        }

        return redirect($url);
    }
}
