@extends('layouts.backend.app')

@section('title','Message')

@push('css')

@endpush

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <a href="{{ route('admin.msg.index') }}" class="btn btn-danger waves-effect">BACK</a>
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                {{ $msg->name }}<small>{{ $msg->email}}</small>
                            </h2>
                        </div>
                        <div class="body">
                             {{ $msg->message }}
                        </div>
                    </div>
                </div>
         </div>
</section>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

@endpush
