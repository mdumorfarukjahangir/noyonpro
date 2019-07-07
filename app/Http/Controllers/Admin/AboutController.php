<?php

namespace App\Http\Controllers\Admin;
use App\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index',compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'image' => 'required|mimes:jpeg,bmp,png',
            'title' => 'required',
            'content' => 'required',
            'link1' => 'required',
            'link2' => 'required',
            'link3' => 'required',
            'link4' => 'required',
            'cv' => 'required|mimes:pdf,docs|max:1000',

        ]);

        $image = $request->file('image');
        $file  = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        $imageName = "about-".time().".".$ex;
        $img = Image::make($file)->resize(800, 830);
        $upload_path = public_path().'/uploads/about/';
        $img->save($upload_path.$imageName);

        // upload cv
        // $cv = $request->file('cv');
        $file  = $request->file('cv');
        $ex = $file->getClientOriginalExtension();
        $cvname = "about-".time().".".$ex;

        $upload_path = public_path().'/uploads/about/';
        $file->move($upload_path,$cvname);

        $about = new About();
        $about->image = $imageName;
        $about->title = $request->title;
        $about->content = $request->content;
        $about->link1 = $request->link1;
        $about->link2 = $request->link2;
        $about->link3 = $request->link3;
        $about->link4 = $request->link4;
        $about->cv = $cvname;

        $about->save();

        Toastr::success('Successfully Saved :)','Success');
        return redirect()->route('admin.about.index');
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit',compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $this->validate($request,[

            'image' => 'mimes:jpeg,bmp,png',
            'title' => 'required',
            'content' => 'required',
            'link1' => 'required',
            'link2' => 'required',
            'link3' => 'required',
            'link4' => 'required',
            'cv' => 'mimes:pdf,docs|max:1000',

        ]);

        $image = $request->file('image');
        $file  = $request->file('image');
        if(isset($file))
        {
            $ex = $file->getClientOriginalExtension();
            $imageName = "about-".time().".".$ex;
            $img = Image::make($file)->resize(800, 830);
            $upload_path = public_path().'/uploads/about/';
            $img->save($upload_path.$imageName);
            $image = $upload_path. $about->image;

        }
        if(file_exists($image)){
            @unlink($image);

        }else{
            $imageName = $about->image;
        }
        // $about->image = $imageName;

        // upload cv
        $cv = $request->file('cv');
        $filecv  = $request->file('cv');
        if(isset($filecv))
        {
            $ex = $file->getClientOriginalExtension();
            $cvname = "about-".time().".".$ex;
            $upload_path = public_path().'/uploads/about/';
            $file->move($upload_path,$cvname);
            $filecv = $upload_path. $about->cvname;

        }
        if(file_exists($filecv)){
            @unlink($filecv);

        }else{
            $cvname = $about->cv;
        }

        $about->image = $imageName;
        $about->title = $request->title;
        $about->content = $request->content;
        $about->link1 = $request->link1;
        $about->link2 = $request->link2;
        $about->link3 = $request->link3;
        $about->link4 = $request->link4;
        $about->cv = $cvname;

        $about->save();

        Toastr::success('Successfully Updated :)','Success');
        return redirect()->route('admin.about.index');
    }

    public function destroy(About $about)
    {
        $upload_path = public_path().'/uploads/about/';
        $image = $upload_path. $about->image;

        if(file_exists($image)){
            @unlink($image);

        }
        $upload_path = public_path().'/uploads/about/';
        $cv = $upload_path. $about->cv;

        if(file_exists($cv)){
            @unlink($cv);
        }

        $about->delete();
        Toastr::success('Successfully Deleted :)','Success');
        return redirect()->back();
    }


}
