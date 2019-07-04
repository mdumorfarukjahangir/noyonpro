@extends('layouts.backend.app')

@section('title','Address')

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
                          Update your address
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.address.update',$address->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="phone" value="{{ $address->phone }}">
                                    <label class="form-label">Phone</label>
                                </div>

                                <div class="form-line">
                                        <input type="text" id="name" class="form-control" name="email" value="{{ $address->email }}">
                                        <label class="form-label">Email</label>
                                    </div>


                                    <div class="form-line">
                                            <input type="text" id="name" class="form-control" name="address" value="{{ $address->address }}">
                                            <label class="form-label">Address</label>
                                        </div>
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.address.index') }}">BACK</a>
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
