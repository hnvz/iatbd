<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Auth;

class ApplicationController extends Controller
{
    public function apply($id){
        return view('pets.applications', [
            'pet' => \App\Models\Pet::find($id),
        ]);
    }

    public function store(Request $request, \App\Models\Application $application){
        $id = $request->input('id');
        
        $application->sender_id = auth()->user()->id;
        $application->pet = $id;
        $application->receiver_id = \App\Models\Pet::find($id)->owner->id;
        
        try{
            $application->save();
            return redirect('/applications/sent');
        }
        catch(Exception $e){
            return redirect('/');
        }
        
    }

    public function receivedindex(){
        $id = auth()->user()->id;
        $received = \App\Models\User::find(1)->receivedApplications->pluck('pet');
        $sender = \App\Models\User::find($id)->receivedApplications->pluck('sender_id');

        return view('applications.receivedindex',[
            'applications' => \App\Models\User::find($id)->receivedApplications,
            'sender'=> \App\Models\User::find($sender),
            
            'pet' => \App\Models\Pet::find($received),
        ]); 
    }


    public function receivedshow($id){
        $petid = \App\Models\Application::find($id)->pet;
        $pet = \App\Models\Pet::find($petid);
        return view('applications.receivedshow',[
            'applications' => \App\Models\Application::find($id),
            'pet' => $pet,
            'sender' => \App\Models\Application::find($id)->sender
        ]); 
    }

    public function sentapp(){
        $id = auth()->user()->id;
        return view('applications.sent',[
            'applications' => \App\Models\User::find($id)->sentApplications,
        ]); 
    }

    public function accept(Request $request, \App\Models\Application $application, $id){
         
        $application = \App\Models\Application::find($id);
        $application->status = 'accepted';
        
        try{
            $application->save();
            return redirect('/applications/received');
        }
        catch(Exception $e){
            return redirect('/dashboard');
        }
    }

    public function reject(Request $request, \App\Models\Application $application, $id){
         
        $application = \App\Models\Application::find($id);
        $application->status = 'rejected';
        
        try{
            $application->save();
            return redirect('/applications/sent');
        }
        catch(Exception $e){
            return redirect('/dashboard');
        }
    }


    public function showall(){
        $id = auth()->user()->id;
        $received = \App\Models\User::all();
        $sender = \App\Models\User::all();
        return view('applications.allapplications', [
            'applications' => \App\Models\Application::all(),
            'sender'=> \App\Models\User::find($sender),
            
            'pet' => \App\Models\Pet::find($received),
        ]);
    }

    public function delete($id){

    
    $application = \App\Models\Application::find($id);
    $application->delete();
    return redirect('/applications/all');
    }
}
