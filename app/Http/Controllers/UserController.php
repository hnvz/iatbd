<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function show($id){

        return view('users.show',[
            'user' => \App\Models\User::find($id),
            'pets' => \App\Models\User::find($id)->ownedPets,
            'house' => \App\Models\User::find($id)->houseImages,
        ]); 
    }

    public function blockuser($id){
        
        $user = \App\Models\User::find($id);
        $user->blocked = true;
        
        try{
            $user->save();
            return redirect('/pets');
        }
        catch(Exception $e){
            return redirect('/dashboard');
        }
    }

    public function unblockuser($id){
        
        $user = \App\Models\User::find($id);
        $user->blocked = false;
        
        try{
            $user->save();
            return redirect('/users');
        }
        catch(Exception $e){
            return redirect('/dashboard');
        }
    }

    public function blockedusers(){
        
        $user = \App\Models\User::where('blocked', 1)->get();
        return view('users.blocked',[
            'user' => $user,
        ]); 
    }
}
