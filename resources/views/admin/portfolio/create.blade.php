@extends('layouts.backend.app')

@section('title','Portfolio')

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
                               Add new Item
                            </h2>

                        </div>
                        <div class="body">
                        <form action="{{ route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line custom-select {{ $errors->has('brandname') ? 'focused error' : '' }}">
                                    <label for="brandname">Select Brand</label>
                                    <select name="brandname" id="brandname" class="form-control show-tick">
                                        @foreach($brandnames as $brandname)
                                            <option value="{{ $brandname->id }}">{{ $brandname->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="heading" id="name" class="form-control">
                                    <label class="form-label">Heading</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="content" id="name" class="form-control">
                                    <label class="form-label">Content</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="price" id="name" class="form-control">
                                    <label class="form-label">Price - Taka </label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label for="image">Image</label>
                                <input type="file" name="image">
                            </div>

                                <br>
                            <a  href="{{ route('admin.portfolio.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
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
