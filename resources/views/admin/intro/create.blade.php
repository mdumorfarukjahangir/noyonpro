@extends('layouts.backend.app')

@section('title','Intro')

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
                               Intro section
                            </h2>

                        </div>
                        <div class="body">
                        <form action="{{ route('admin.intro.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" id="name" class="form-control">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <label for="image">Background Image</label>
                                <input type="file" name="image">
                            </div>
                                <br>
                            <a  href="{{ route('admin.intro.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
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
