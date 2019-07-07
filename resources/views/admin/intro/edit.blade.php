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
                          Edit Intro
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.intro.update',$intro->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $intro->name }}">
                                    <label class="form-label">Title</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <label for="image">Background Image</label>
                                <input type="file" name="image">
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.intro.index') }}">BACK</a>
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
