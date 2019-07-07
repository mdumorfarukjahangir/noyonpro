<?php

namespace App\Http\Controllers\Admin;
use App\Im;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ImController extends Controller
{

     public function index()
     {
         $ims = Im::all();
         return view('admin.im.index',compact('ims'));
     }

     public function create()
     {
         return view('admin.im.create');
     }

     public function store(Request $request)
     {
         $this->validate($request,[
             'name' => 'required'
         ]);
         $im = new Im();
         $im->name = $request->name;
         $im->save();
         Toastr::success('Successfully Saved :)' ,'Success');
         return redirect()->route('admin.im.index');
     }

     public function edit($id)
     {
         $im = Im::find($id);
         return view('admin.im.edit',compact('im'));
     }

     public function update(Request $request, $id)
     {
         $im = Im::find($id);
         $im->name = $request->name;
         $im->save();
         Toastr::success('Successfully Updated :)','Success');
         return redirect()->route('admin.im.index');
     }


     public function destroy($id)
     {
         Im::find($id)->delete();
         Toastr::success('Successfully Deleted :)','Success');
         return redirect()->back();
     }
}
