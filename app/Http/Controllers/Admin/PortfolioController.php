<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use App\Brandname;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brandnames = Brandname::all();
        return view('admin.portfolio.create',compact('brandnames'));
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

            'brandname' => 'required',
            'heading' => 'required',
            'content' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png',

        ]);

        $image = $request->file('image');
        // dd($image);

        // $slug = str_slug($request->title);

        $file  = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        $imageName = "item-".date('Y-m-d').time().".".$ex;
        $img = Image::make($file)->resize(300, 300);
        $upload_path = public_path().'/uploads/item/';
        $img->save($upload_path.$imageName);

        $item = new Portfolio();
        $item->brand_id = $request->brandname;
        $item->heading = $request->heading;
        $item->content = $request->content;
        $item->price = $request->price;

        $item->image = $imageName;
        $item->save();

        Toastr::success('Item Successfully Saved :)','Success');
        return redirect()->route('admin.portfolio.index');
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
        $brandnames = Brandname::all();
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.edit',compact('brandnames','portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->validate($request,[

            'brandname' => 'required',
            'heading' => 'required',
            'content' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,bmp,png',

        ]);

        $image = $request->file('image');
        $file  = $request->file('image');
        if(isset($file)){
            $ex = $file->getClientOriginalExtension();
            $imageName = "item-".date('Y-m-d').time().".".$ex;
            $img = Image::make($file)->resize(300, 300);
            $upload_path = public_path().'/uploads/item/';
            $img->save($upload_path.$imageName);
            $image = $upload_path. $portfolio->image;

        }
        if(file_exists($image)){
            @unlink($image);

        }else{
            $imageName = $portfolio->image;
        }

        $item = new Portfolio();
        $item->brand_id = $request->brandname;
        $item->heading = $request->heading;
        $item->content = $request->content;
        $item->price = $request->price;

        $item->image = $imageName;
        $item->save();



        Toastr::success('Item Updated successfully  :)','Success');
        return redirect()->route('admin.portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $upload_path = public_path().'/uploads/item/';
        $image = $upload_path. $portfolio->image;

        if(file_exists($image)){
            @unlink($image);
        }

        $portfolio->delete();
        Toastr::success('Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
