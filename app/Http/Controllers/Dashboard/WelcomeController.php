<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $user=User::find(session('id'));
        $users=User::where('verified',1)->get();
        return view('dashboard.welcome',compact('user','users'));
    }

    public function registered(){
        $user=User::find(session('id'));
        $users=User::where('verified',0)->get();
        return view('dashboard.register',compact('user','users'));
    }

    public function accept($id){
        $user=User::find($id);
        $user->verified=1;
        $user->save();
        return redirect(route('dashboard.users'));
    }

    public function refuse($id){
        User::find($id)->delete();
        return redirect(route('dashboard.users'));
    }
    

    public function logout(){
        return redirect('/dashboard');
    }
}
