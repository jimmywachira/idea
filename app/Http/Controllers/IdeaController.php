<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\IdeaRequest;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    #Display a listing of the resource.
    public function index(){
        // $ideas = Idea::query()->where('user_id', Auth::id())->get();
        $ideas = Auth::user()->ideas;
        return view('ideas/index',['ideas' => $ideas]);
    }

    #Show the form for creating a new resource.
    public function create(){
        return view('ideas/create');
    }

    #Store a newly created resource in storage.
    public function store(IdeaRequest $request ){
        // Idea::create(['description' => $idea,'status' => request('status'),
        // 'user_id' => Auth::id()]);
        $idea = Auth::user()->ideas()->create([
            'description' => request('description'),
            'status' => request('status')
        ]);

        return redirect('/ideas')->with('success', 'Idea submitted successfully!');
    }

    #Display the specified resource.
    public function show(Idea $idea){
        // Gate::authorize('update', $idea);
        if(Auth::user()->cannot('update', $idea)){
            return redirect('/ideas');
        }

        return view('ideas.show',['idea' => $idea]);
    }

    #Show the form for editing the specified resource.
    public function edit(Idea $idea){
        return view('ideas.edit',['idea' => $idea]);
    }

    #Update the specified resource in storage.
    public function update(IdeaRequest $request, Idea $idea){
        // Gate::authorize('update', $idea);
        $idea->update([
        'description' => request('description'),
         'status' => request('status')
        ]);
        return redirect('/ideas/' . $idea->id);
    }

    #Remove the specified resource from storage.
    public function destroy(Idea $idea){
        // Gate::authorize('delete', $idea);
        $idea->delete();
        return redirect('/ideas');
    }
}
