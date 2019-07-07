@extends('layouts.backend.app')

@section('title','About')

@push('css')

@endpush

@section('content')
<section class="content">
     <div class="container-fluid">

            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Edit
                            </h2>

                        </div>
                        <div class="body">
                        <form action="{{ route('admin.about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" name="title" value={{ $about->title }} id="name" class="form-control">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="content"     rows="3" class="form-control">
                                                 {{ $about->content }}
                                            </textarea>
                                            <label class="form-label">Content</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">

                                        <div class="form-line">
                                            <input type="text" name="link1" id="name" value={{ $about->link1 }} class="form-control">
                                            <label class="form-label">Link - 1</label>
                                        </div>
                                 </div>
                                 <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="link2" id="name" value={{ $about->link2 }} class="form-control">
                                            <label class="form-label">Link - 2</label>
                                        </div>
                                 </div>
                                 <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="link3" id="name" value={{ $about->link3 }} class="form-control">
                                            <label class="form-label">Link - 3</label>
                                        </div>
                                 </div>
                                 <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="link4" id="name" value={{ $about->link4 }} class="form-control">
                                            <label class="form-label">Link - 4</label>
                                        </div>
                                 </div>
                                <div class="form-group form-float">
                                    <label for="image">Image</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group form-float">
                                        <label for="cv">Droup CV</label>
                                        <input type="file" name="cv">
                                </div>
                                <br>
                            <a  href="{{ route('admin.about.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
        <section>
@endsection

@push('js')

@endpush
