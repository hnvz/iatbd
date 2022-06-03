<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{

    public function index(){
        return view('pets.index',[
            'pets' => \App\Models\Pet::all()
        ]);

    }
    public function show($id){
        $owner = \App\Models\Pet::find($id)->owner;
        return view('pets.show',[
            'pet' => \App\Models\Pet::find($id),
            'owner' => $owner,
        ]); 
    }
    
    
    public function create(){
        return view('pets.create', [
            'pet_types' => \App\Models\PetType::all(),
            // 'images' => \App\Models\Image::all(),
        ]);
    }
    
    public function store(Request $request, \App\Models\Pet $pets){
        $pets->name = $request->input('name');
        $pets->type = $request->input('type');
        $pets->startdate = $request->input('startdate');
        $pets->enddate = $request->input('enddate');
        $pets->hourly_rate = $request->input('hourly_rate');
        $pets->description = $request->input('description');
        $pets->available = true;
        $pets->owner_id = auth()->user()->id;
        
        try{
            $pets->save();
            return redirect('/pets');
        }
        catch(Exception $e){
            return redirect('/pets');
        }
        
    }
}
