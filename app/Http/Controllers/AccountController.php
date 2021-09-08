<?php

namespace App\Http\Controllers;

use App\Level;
use App\User;
use App\Invest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function deposit()
    {
        $invests = Invest::all();
        
        return view('front-end.deposit.deposit',[
            'invests' =>$invests
        ]);
    }
    public function vip()
    {
        return view('front-end.vip.vip');
    }
    public function cash()
    {
        return view('front-end.cash.cash');
    }
    public function service()
    {
        return view('front-end.service.service');
    }
    public function task()
    {
        // $levels = Level::all();
        $users = Auth::user();

        $email = $users->email;

        $levels = Level::where('email','=',$email)->get();

        // $levels = Level::find($users->email);


        return view('front-end.task.task',[
            'levels'=> $levels,
        ]);
    }
    public function youtube()
    {
        return view('front-end.task.youtube');
    }
    public function twitter()
    {
        return view('front-end.task.twitter');
    }
    public function others()
    {
        return view('front-end.task.others');
    }
    public function other()
    {
        return view('front-end.other.page2');
    }
    public function me()
    {
        return view('front-end.me.me');
    }
}
