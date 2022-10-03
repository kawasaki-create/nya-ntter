<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    public function login(Request $request)
    {
        if(!$request->isMethod('post')){
            return view('twitterLogin');
        }
        //ログインボタンを押したらTwitterの認証ページへ
        return Socialite::driver('twitter')->redirect();
    }
    public function callback(Request $request)
    {
        dd('ok');
    }
}