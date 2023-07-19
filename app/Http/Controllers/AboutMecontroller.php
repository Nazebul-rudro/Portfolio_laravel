<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutMecontroller extends Controller
{
    //
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('backend.about.index', compact('abouts'));
    }
    public function create()
    {
        return view('backend.about.create');
    }
    public function store(AboutRequest $request)
    {
        About::create([
            'header' => $request->header,
            'description' => $request->description,
            'email' => $request->email
        ]);
        return redirect()->route('abouts.index')->with('massage', 'About Added');
    }
    public function edit(About $about)
    {
        
        return view('backend.about.edit', compact('about'));
    }
    public function update(AboutRequest $request, About $about)
    {
        $about->update([
            'header' => $request->header,
            'description' => $request->description,
            'email' => $request->email
        ]);
        return redirect()->route('abouts.index')->with('massage', 'About Update');
    }
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('abouts.index')->with('massage', 'About Delete');
    }
}
