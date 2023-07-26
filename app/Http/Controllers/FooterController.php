<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function index()
    {
        $footers = Footer::latest()->paginate(5);
        return view('backend.footer.index', compact('footers'));
    }
    public function create()
    {
        return view('backend.footer.create');
    }
    public function store(Request $request, Footer $footer)
    {
        $footer->create([
        'name' => $request->name,
        'email' => $request->email,
        'address' =>$request->address,
        'linkedin' =>$request->linkedin,
        'twitter' =>$request->twitter,
        'facebook' =>$request->facebook, 
        'instagram' =>$request->instagram,
        'isActive' =>$request->isActive == true ? '1' : '0'
        ]);
        return redirect()->route('footer.index')->with('massage', 'Footer Added');
    }
    public function edit(Footer $footer)
    {
        return view('backend.footer.edit', compact('footer'));
    }
    public function update(Request $request, Footer $footer)
    {
        $footer->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' =>$request->address,
            'linkedin' =>$request->linkedin,
            'twitter' =>$request->twitter,
            'facebook' =>$request->facebook, 
            'instagram' =>$request->instagram,
            'isActive' =>$request->isActive == true ? '1' : '0'
        ]);
        return redirect()->route('footer.index')->with('massage', 'Footer Update');
    }
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footer.index')->with('massage', 'Footer Delete');
    }

    public function active(string $id)
    {
        $footer = Footer::findOrFail($id);
        if($footer->isActive){
            $footer->where('id', $id)->update(['isActive' => '0']);
        }
        return redirect()->route('footer.index')->with('massage', 'Footer Deactive');

    }

    public function deactive(string $id){
        $footer = Footer::findOrFail($id);
        if($footer->isActive == 0){
            $footer->where('id', $id)->update(['isActive' => '1']);
        }
        return redirect()->route('footer.index')->with('massage', 'Footer Active');
    }
}
