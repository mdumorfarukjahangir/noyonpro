<?php

namespace App\Http\Controllers\Admin;

use App\Brandname;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandnames = Brandname::latest()->get();
        return view('admin.brandname.index',compact('brandnames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brandname.create');
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
            'name' => 'required|unique:brandnames'
        ]);
        $brandname = new Brandname();
        $brandname->name = $request->name;
        $brandname->slug = str_slug($request->name);
        $brandname->save();
        Toastr::success('Brand name Successfully Saved :)' ,'Success');
        return redirect()->route('admin.brandname.index');
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
        $brandname = Brandname::find($id);
        return view('admin.brandname.edit',compact('brandname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brandname = Brandname::find($id);
        $brandname->name = $request->name;
        $brandname->slug = str_slug($request->name);
        $brandname->save();
        Toastr::success('Brand name Successfully Updated :)','Success');
        return redirect()->route('admin.brandname.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brandname::find($id)->delete();
        Toastr::success('Brand name Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
