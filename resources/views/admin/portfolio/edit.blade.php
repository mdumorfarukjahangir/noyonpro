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
                          Edit Item
                        </h2>
                    </div>


                    <div class="body">
                        <form action="{{ route('admin.portfolio.update',$portfolio->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('brandname') ? 'focused error' : '' }}">
                                    <label for="brandname">Select Brand</label>
                                    <select name="brandname" id="brandname" class="form-control show-tick">
                                        @foreach($brandnames as $brandname)
                                        <option
                                                {{ $portfolio->brand_id == $brandname->id ? 'selected' : '' }}
                                                value="{{ $brandname->id }}">{{ $brandname->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="heading" id="name" value="{{ $portfolio->heading }}"class="form-control">
                                    <label class="form-label">Heading</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="content" id="name" value="{{ $portfolio->content }}" class="form-control">
                                    <label class="form-label">Content</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="price" id="name" value="{{ $portfolio->price }}" class="form-control">
                                    <label class="form-label">Price - Taka </label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label for="image">Image</label>
                                <input type="file" name="image">
                            </div>
                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.portfolio.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')

@endpush
