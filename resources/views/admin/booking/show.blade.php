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
                                <p class="form-control">{{ $booking->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">email</label>
                                <p class="form-control">{{ $booking->email }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="subject">date</label>
                                <p class="form-control">{{ $booking->date }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="message">time</label>
                                <p class="form-control">{{ $booking->time }}</p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">count</label>
                                <p class="form-control">{{ $booking->count }}</p>
                            </div>

                        </div>
                        <a href="{{ route('admin.booking.index') }}" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
