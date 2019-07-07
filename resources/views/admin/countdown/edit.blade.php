@extends('layouts.backend.app')

@section('title','Countdown')

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
                          Edit countdown item
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.countdown.update',$countdown->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" id="name" value="{{ $countdown->name }}" class="form-control">
                                        <label class="form-label">Name (Icon)</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="title" id="name"  value="{{ $countdown->title }}" class="form-control">
                                            <label class="form-label">Title</label>
                                        </div>
                                </div>

                                <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" name="number" id="name" value="{{ $countdown->number }}" class="form-control">
                                            <label class="form-label">Number</label>
                                        </div>
                                </div>


                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.countdown.index') }}">BACK</a>
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
