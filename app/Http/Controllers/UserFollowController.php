<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    //ユーザーをフォロー
    public function store($id)
    {
    // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
    \Auth::user()->follow($id);
    return back();
    }
    
    //フォロー解除
    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        return back();
    }
}