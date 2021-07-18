<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\User;

class CreateUserController extends Controller
{
    public function create(){
        $user=User::find(session('id'));
        return view('dashboard.create',compact('user'));
    }

    public function store(CreateUserRequest $request){
        $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>Hash::make($request->password),
                'expire_date'=>$request->expire_date,
                'verified'=>1
            ]);
        return redirect(route('dashboard.users'));
    }

    public function edit($id){
        $user=User::find(session('id'));
        $userx=User::find($id);
        return view('dashboard.update',compact('user','userx'));
    }

    public function update(UpdateUserRequest $request,$id){
        $user = User::find($id)
        ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>Hash::make($request->password),
                'expire_date'=>$request->expire_date,
            ]);
        return redirect(route('dashboard.users'));
    }
}
