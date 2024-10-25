@extends('admin.master')

@section('title', show messages)

@section('content')
<body class="vertical light">
<div class="container-fluid">
        <div class="row justify-content-center">
                        <div class="col-12">
                <h2 class="h5 page-title">message</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">name</label>
                                <p class="form-control">{{ $message->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">email</label>
                                <p class="form-control">{{ $message->email }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="subject">subject</label>
                                <p class="form-control">{{ $message->subject }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="message">message</label>
                                <p class="form-control">{{ $message->message }}</p>
                            </div>

                        </div>
                        <a href="{{ route('admin.messages.index') }}" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
