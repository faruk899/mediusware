@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
    </div>
    <div id="app">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        {{--<form action="{{ route('product.store') }}" method="post">--}}
            {{--@csrf--}}

            {{--<div class="container-fluid">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-3 col-md-6">--}}
                        {{--<div style="border:1px solid #ccc; padding: 20px">--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Product Name</label>--}}
                                {{--<input type="text" class="form-control" name="title" id="title">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label>Product SKU</label>--}}
                                {{--<input type="text" class="form-control" name="sku" id="sku">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label>Description</label>--}}
                                {{--<textarea class="form-control" name="description" cols="5" rows="3" id="description"></textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div style="border:1px solid #ccc; padding: 20px; margin: 20px 0">--}}
                            {{--<div class="form-group">--}}
                                {{--<h5>Media</h5>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" name="media" id="media">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {{--variants section--}}

                    {{--<div class="col-sm-3 col-md-6">--}}
                        {{--<div style="border:1px solid #ccc; padding: 20px">--}}
                            {{--<div class="form-group">--}}
                                {{--<h5>Variants</h5>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label>Option</label>--}}
                                {{--<input type="text" class="form-control" name="option" id="option">--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<h5>Preview</h5>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label>Option</label>--}}
                                {{--<input type="text" class="form-control" name="option" id="option">--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">--}}
        {{--</form>--}}
        <create-product :variants="{{ $products }}">Loading</create-product>
    </div>
@endsection
