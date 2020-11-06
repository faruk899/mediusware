{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div class="d-sm-flex align-items-center justify-content-between mb-4">--}}
        {{--<h1 class="h3 mb-0 text-gray-800">Change Password</h1>--}}
    {{--</div>--}}
    {{--<div id="app">--}}
        {{--<!-- Success message -->--}}
        {{--@if(Session::has('success'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{{Session::get('success')}}--}}
            {{--</div>--}}
        {{--@endif--}}

        {{--<form action="{{ route('product.store') }}" method="post">--}}
            {{--@csrf--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Old Password</label>--}}
                        {{--<input type="text" class="form-control" name="name" id="name">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label>New Password</label>--}}
                        {{--<input type="password" class="form-control" name="name" id="name">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label>Confirm Password</label>--}}
                        {{--<input type="password" class="form-control" name="name" id="name">--}}
                    {{--</div>--}}

                    {{--<input type="submit" name="send" value="Update Password" class="btn btn-dark btn-block">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<create-product :variants="{{ $variants }}">Loading</create-product>--}}
    {{--</div>--}}
{{--@endsection--}}
