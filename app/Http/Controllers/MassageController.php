<?php

namespace App\Http\Controllers;

use App\Http\Requests\MassageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    //
    public function index()
    {
        $messages = Message::latest()->paginate(5);
        return view('backend.message.index', compact('messages'));
    }
    public function store(MassageRequest $request, Message $massage)
    {
        $massage->create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return back();
        // dd($request->all());
    }
}
