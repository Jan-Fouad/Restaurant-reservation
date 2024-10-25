@extends('admin.master')

{{-- @section('title', __('show_message')) --}}

@section('content')
<body class="vertical light">
<div class="container-fluid">
        <div class="row justify-content-center">
                        <div class="col-12">
                <h2 class="h5 page-title">{{ __('show_message') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">name</label>
                                <p class="form-control">{{ $menu->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">category</label>
                                <p class="form-control">{{ $menu->category }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="subject">price</label>
                                <p class="form-control">{{ $menu->price }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="message">image</label>
                                <p class="form-control">{{ $menu->image_url }}</p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">description</label>
                                <p class="form-control">{{ $menu->description }}</p>
                            </div>

                        </div>
                        <a href="{{ route('admin.menu.index') }}" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
