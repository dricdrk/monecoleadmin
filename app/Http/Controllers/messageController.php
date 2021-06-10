<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;    

class messageController extends Controller
{
   
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'objet' => 'required',
            'message' => 'required|min:6'
        ]);

        Message::create($input);

        return back()
                ->with('success','User Created Successfully');
    } 
}
