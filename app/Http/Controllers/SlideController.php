<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        return view('admin.slide.index');
    }

    public function create(Request $request)
    {
        $slide = Slide::newSlide($request);
        return redirect()->back()->with('message', 'Slide info create successfully.');
    }

    public function manage()
    {
        $slides = Slide::all();
        return view('admin.slide.manage',['slides'=>$slides]);
    }
    public function delete($id)
    {
        Slide::deleteSlide($id);
        
        return redirect('/slide/manage')->with('message', 'slide info delete successfully.');
    }
}
