<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
   
    //お気に入り登録
    public function store($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }
   
    //お気に入り解除
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
}
