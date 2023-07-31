<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Protfolio;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProtfolioProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $personals = Personal::latest()->paginate(5);

    return view('backend.about-profile.index', compact('personals'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.about-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Personal $protfolioprofile)
    {
        $protfolioprofile->create([
        'header' => $request->header,
        'sortdescription' => $request->sortdescription, 
        'description' => $request->description,
        'image' => $this->uploadImage(Request()->file('image'))
        ]);

        return redirect()->route('profile.index')->with('massage', 'profile Add');
        
    }

   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return $personal;
         $personal  = Personal::find($id);
        return view('backend.about-profile.edit', compact('personal'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Remove the line below as we are getting the ID from the URL parameter $id
        // $result =  $request->path('id');
    
        Personal::where('id', $id)->update([
            'header' => $request->header,
            'sortdescription' => $request->sortdescription, 
            'description' => $request->description,
            'image' => $this->uploadImage(Request()->file('image'))
        ]);
    
        return redirect()->route('profile.index')->with('massage', 'profile update');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $personal = Personal::find($id);
        $personal->delete();
        return redirect()->route('profile.index')->with('massage', 'profile Delete');
    }


    public function uploadImage($file)
    {
        $filename = time().uniqid(). '.'. $file->getClientOriginalExtension();
        Image::make($file)->resize(700, 300)->save(storage_path('/app/public/protfolioprofile/'.  $filename));
        return $filename;
    }
}
