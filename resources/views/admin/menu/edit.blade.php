@extends('admin.master')

@section('title', __('keywords.edit_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit_service') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.menu.update', ['menu' => $menu]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" value="{{ $menu->name }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control"
                                        placeholder="{{ __('keywords.price') }}" value="{{ $menu->price }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="category">Category</label>
                                    <select name="category" class="form-control" >
                                        <option value="{{ $menu->category }}" disabled selected>{{ $menu->category }}</option>
                                        <option value="breakfast">Breakfast</option>        
                                        <option value="lunch">Lunch</option>        
                                        <option value="dinner">Dinner</option>        
                                    </select>
                                    @error('category')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="image_url">Image</label>
                                    <input type="text" name="image_url" class="form-control">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $menu->description }}</textarea>
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
