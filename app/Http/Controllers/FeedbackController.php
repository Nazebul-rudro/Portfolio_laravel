<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Models\Review;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::latest()->paginate(5);
        return view('backend.feedback.index', compact('reviews'));
    }
    public function create()
    {
        return view('backend.feedback.create');
    }
    public function store(Request $request, Review $review)
{
     $review->create([
        'name' => $request->name, 
        'project_name' => $request->project_name,
        'comment' => $request->comment, 
        'image' => $this->uploadImage(Request()->file('image'))
    ]);
    // dd($result->all());

    return redirect()->route('feedback.index')->with('massage', 'Feedback Added');
}

    public function edit(Review $review)
{
    return view('backend.feedback.edit', compact('review'));
}
    
    public function update(Request $request, Review $review)
{
    $review->update([
        'name' => $request->name, 
        'project_name' => $request->project_name,
        'comment' => $request->comment, 
        'image' => $this->uploadImage(Request()->file('image'))
    ]);
    return redirect()->route('feedback.index')->with('massage', 'Feedback Update');
}

    public function destroy(Review $review)
    {
        
        $review->delete();
        return redirect()->route('feedback.index')->with('massage', 'Feedback Delete');
    }

public function uploadImage($file){
    //$fileName = $file->file('CategoryImage')->getClientOriginalExtension();
$fileName = time(). uniqid().'.' . $file->getClientOriginalExtension();
Image::make($file)->resize(1160, 365)->save(storage_path('/app/public/reviews/'. $fileName));
return $fileName;
}
}
