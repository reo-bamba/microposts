<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //ユーザー一覧をID降順で取得
        $users = User::oderBy('id', 'desk')->pagemnate(10);
        
        //ユーザ一覧を表示
        return view('users.index', [
            'users' => $users,
            ]);
    }
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
         // ユーザ詳細ビューでそれを表示
         return view('users.show', [
             'user' => $user,
             ]);
}
}