<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::latest()->paginate(5);
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.slider.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        //
        try{
            $exe = $request->file('image')->getClientOriginalExtension();
            $filename = time(). uniqid(). '.' . $exe;
            if($request->hasFile('image')){
                $request->file('image')->storeAs('/public/slider'. $filename);
            }
            Slider::create([
                'caption' => $request->caption,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
                'isActive' => $request->isActive == true ? '1' : '0',
            ]);
            //dd($result->all());
            return redirect()->route('slider.index')->with('massage', 'Slider Added');
        }catch(QueryException $e){
            return $e->getMessage();
        }
        
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
    public function edit(Slider $slider)
    {
        //
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
        // dd($request->all());
        $exe = $request->file('image')->getClientOriginalExtension();
        $filename = time(). uniqid(). '.' . $exe;
        if($request->hasFile('image')){
            $request->file('image')->storeAs('/public/slider/'. $filename);
        }
        $slider->update([
                'caption' => $request->caption,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
                'isActive' => $request->isActive == true ? '1' : '0',
        ]);
        return redirect()->route('slider.index')->with('massage', "Slider Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
        $slider->delete();
        return redirect()->route('slider.index')->with('massage', "Slider Delete");
    }


// active deActive
public function sliderActive(string $id)
{
    $slider = Slider::findOrFail($id);

    if ($slider->isActive) {
        $slider->where('id', $id)->update(['isActive' => '0']);
    }

    return redirect()->route('slider.index')->with('massage', "Slider Deactivated");
}



public function sliderDeactive(string $id){
    $slider = Slider::findOrFail($id);
    
    if ($slider->isActive == 0) {
        $slider->where('id', $id)->update(['isActive' => '1']);
    }
    // return $slider;
    return redirect()->route('slider.index')->with('massage', "Slider Active");
}

}
