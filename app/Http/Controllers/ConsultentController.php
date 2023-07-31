<?php

namespace App\Http\Controllers;

use App\Models\Consultent;
use Illuminate\Http\Request;

class ConsultentController extends Controller
{
    //
    public function index(){
        $consultents = Consultent::latest()->paginate(5);
        return view('backend.consultent.index', compact('consultents'));
    }
    public function create()
    {
        return view('backend.consultent.create');
    }
    public function store(Request $request, Consultent $consultent)
    {
        $file = $request->file('image')->getClientOriginalExtension();
        $filename = time().uniqid(). '.' . $file;
        if($request->hasFile('image')){
            $request->file('image')->storeAs('/public/consultent/'. $filename);
        }

        $consultent->create([
            'description' => $request->description, 
        'sortdescription' => $request->sortdescription,
        'image' => $filename,
        ]);
        return redirect()->route('consultent.index')->with('massage', 'Consultent Store');
    }
    public function edit(string $id )
    {
        $consultent = Consultent::find($id);
        return view('backend.consultent.edit', compact('consultent'));
    }
    public function update(Request $request, $id)
    {
        $exe = $request->file('image')->getClientOriginalExtension();
        $filename = time().uniqid().'.'. $exe;
        if($request->hasFile('image')){
            $request->file('image')->storeAs('/public/consultent/'. $filename);
        }
        Consultent::where('id', $id)->update([
            'description' => $request->description, 
            'sortdescription' => $request->sortdescription,
            'image' => $filename,
         ]);
         return redirect()->route('consultent.index')->with('massage', 'Consultent Update');
    }

    public function destroy(string $id)
    {
        $consultent = Consultent::find($id);
        $consultent->delete();
        return redirect()->route('consultent.index')->with('massage', 'delete Successfully');
    }
}
