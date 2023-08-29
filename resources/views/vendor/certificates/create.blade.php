@extends('vendor.layouts.master')
@section('title')
    @lang('translation.create_certificate_request')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            @lang('translation.app_name')
        @endslot
        @slot('link')
            {{route('vendor.certificates.index')}}
        @endslot
        @slot('link_name')
            @lang('translation.certificate_requests')
        @endslot
        @slot('title')
            @lang('translation.create_certificate_request')
        @endslot
    @endcomponent
    {{ Form::open(['route' => 'vendor.certificates.store','id'=>'createcertificate_request-form','autocomplete'=>'off','class'=>'needs-validation','method'=>'POST','enctype'=>'multipart/form-data']) }}
        
        @include('vendor.certificates.form')

    {!! Form::close() !!}

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ URL::asset('assets/js/pages/product_custom/profile_image.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection
