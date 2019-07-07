<?php

namespace App\Http\Controllers\Admin;
use App\Intro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros = Intro::all();
        return view('admin.intro.index',compact('intros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.intro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png',

        ]);

        $image = $request->file('image');
        // dd($image);

        // $slug = str_slug($request->title);

        $file  = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        $imageName = "intro-".time().".".$ex;
        $img = Image::make($file)->resize(1200, 700);
        $upload_path = public_path().'/uploads/intro/';
        $img->save($upload_path.$imageName);

        $intro = new Intro();
        $intro->name = $request->name;
        $intro->image = $imageName;
        $intro->save();

        Toastr::success('Intro Successfully Saved :)','Success');
        return redirect()->route('admin.intro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $intro = Intro::find($id);
        return view('admin.intro.edit',compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intro $intro)
    {
        $this->validate($request,[

            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,png',

        ]);

        $image = $request->file('image');
        $file  = $request->file('image');
        if(isset($file)){
            $ex = $file->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $img = Image::make($file)->resize(1200, 700);
            $upload_path = public_path().'/uploads/intro/';
            $img->save($upload_path.$imageName);
            $image = $upload_path. $intro->image;

        }


        if(file_exists($image)){
            @unlink($image);

        }else{
            $imageName = $intro->image;
        }


        $intro->name = $request->name;
        $intro->image = $imageName;
        $intro->save();



        Toastr::success('Intro Updated successfully  :)','Success');
        return redirect()->route('admin.intro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
