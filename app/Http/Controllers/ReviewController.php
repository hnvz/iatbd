<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function received(){
        $id = auth()->user()->id;
        return view('reviews.received',[
            'reviews' => \App\Models\User::find($id)->receivedApplications,
        ]); 
    }

    public function create($id){
        
        $receiver = \App\Models\Application::find($id)->sender;

        return view('reviews.createreview', [
            'receiver' => $receiver,
            
        ]);
    }
    
    public function store(Request $request, \App\Models\Review $review){
        $review->sender_id = auth()->user()->id;
        $review->receiver_id = $request->input('receiver');
        $review->score = $request->input('score');
        $review->description = $request->input('description');
        
        try{
            $review->save();
            return redirect('/dashboard');
        }
        catch(Exception $e){
            return redirect('/');
        }
        
    }
}
