<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\RegisterRequest;
use App\Message;
use App\User;
use Carbon\Carbon;
use DateTime;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
class websiteController extends Controller
{
    public function index(){
        if(!session()->has('lang')){
            app()->setLocale('en');
            session()->put('lang','en');
        }
        if(!session()->has('mood'))
            session()->put('mood','light');
        return view('website_pages.index');
    }

    public function contact(){
        return view('website_pages.contact');
    }

    public function send_message(MessageRequest $request){
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'question'=>$request->question,
        ]);
        return redirect('/');
    }

    public function service($num){
        return view('website_pages.service',compact('num'));
    }

    public function mood($mood){
        if(session('mood'))
            session()->forget('mood');
        session()->put('mood',$mood);
        return redirect()->back();
    }

    public function lang($lang){
        app()->setLocale($lang);
        session()->put('lang',$lang);
        return back();
    }

    public function get_start(){
        return view('website_pages.get_started');
    }

    public function signup(RegisterRequest $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
        ]);
        return redirect('/');
    }

    public function login(LoginRequest $request){
        date_default_timezone_set('Africa/Cairo');
        $user=User::where('email',$request->email)->first();
        if($user){
            if($user->islogged==1){
                $start_date = new DateTime();
                $since_start = $start_date->diff(new DateTime($user->logged_time));
                if(($since_start->h*60+$since_start->i)>15){
                    $user->islogged=0;
                    $user->save();
                }
            }
            if($user->islogged==1)
                return redirect('/get_started')->with('logged','There is another user logged in');
            $date=Carbon::now();
            if($user->expire_date!=null&&$date>$user->expire_date)
                return redirect('/get_started')->with('logged','You account has beed expired');

            if(Hash::check($request->password, $user->password)&&$user->isadmin==1){
                if($user->verified==0)
                    return redirect('/get_started')->with('logged',"You aren't verified yet");
				$user->logged_time=date('Y-m-d H:i:s');
                app()->setLocale('en');
                session()->put('lang','en');
                session()->put('id',$user->id);
                session()->put('name',$user->name);
                $user->islogged=1;
                $user->save();
                return redirect('/dashboard');
            }
            else if(Hash::check($request->password, $user->password)&&$user->isadmin==0){
                if($user->verified==0)
                    return redirect('/get_started')->with('logged',"You aren't verified yet");

				app()->setLocale('en');
                session()->put('lang','en');
                session()->put('id',$user->id);
                session()->put('name',$user->name);
                $user->logged_time=date('Y-m-d H:i:s');
                $user->islogged=1;
                $user->save();
                return redirect(route('forex.index'));
            }
        }
        return redirect()->back();
    }

    public function logout(){
        $user=User::find(session('id'));
        $user->islogged=0;
        $user->save();
        return redirect('/');
    }
}
