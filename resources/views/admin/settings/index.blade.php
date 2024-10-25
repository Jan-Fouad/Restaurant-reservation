@extends('admin.master')

@section('title', __('keywords.settings'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('keywords.email') }}" value="{{ $setting->email }}">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="{{ __('keywords.address') }}" value="{{ $setting->address }}">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="facebook_link">Facebook Link</label>
                                    <input type="url" name="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }}" value="{{ $setting->facebook }}">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="instagram_link">Instagram Link</label>
                                    <input type="url" name="instagram_link" class="form-control" placeholder="{{ __('keywords.instagram_link') }}" value="{{ $setting->instagram_link }}">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="url" name="twitter_link" class="form-control" placeholder="{{ __('keywords.twitter_link') }}" value="{{ $setting->twitter_link }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
