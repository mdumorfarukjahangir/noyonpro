<?php

namespace App\Http\Controllers\Admin;
use App\Countdown;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
class CountdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countdowns = Countdown::all();
        return view('admin.countdown.index',compact('countdowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countdown.create');
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
            'name' => 'required|unique:countdowns',
            'title' => 'required|unique:countdowns',
            'number' => 'required',
        ]);
        $countdown = new Countdown();
        $countdown->name = $request->name;
        $countdown->title = $request->title;
        $countdown->number = $request->number;
        $countdown->save();
        Toastr::success('Countdown item Successfully Saved :)' ,'Success');
        return redirect()->route('admin.countdown.index');
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
        $countdown = Countdown::find($id);
        return view('admin.countdown.edit',compact('countdown'));
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

        $countdown = Countdown::find($id);
        $countdown->name = $request->name;
        $countdown->title = $request->title;
        $countdown->number = $request->number;
        $countdown->save();
        Toastr::success('Countdown item Successfully updated :)' ,'Success');
        return redirect()->route('admin.countdown.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Countdown::find($id)->delete();
        Toastr::success('Countdown item Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
