<?php

namespace App\Http\Controllers;

use App\Models\Nid;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        $peoples = People::all();
        return view('oto.nid.index',['peoples'=>$peoples]);
    }


    public function create(){
        return view('oto.nid.create');
    }

    public function store(Request $request){
        $people = People::create([
            'name'=>$request->name,
        ]);
        $people->nid()->create([
           'nid'=>$request->nid, 
        ]);
        return redirect(route('people.index'))->with('message','Created Successfully');
    }

    public function edit(People $people){
        return view('oto.nid.edit',['people'=>$people]);
    }
    
    public function update(People $people, Request $request){
        $people->update([
            'name'=>$request->name
        ]);
        $people->nid()->update([
            'nid'=>$request->nid
        ]);
        return redirect(route('people.index'))->with('message','Updated Successfully');
    }

    public function show(People $people){
        return view('oto.nid.show',['people'=>$people]);
    }

    public function delete(People $people ){
        /* Beacuse of onDelete('cascade') into migration 
            the relational data also delted with parent table*/
        
        $people->delete();
        return redirect(route('people.index'))->with('message','Deleted Successfully');
    }
}
