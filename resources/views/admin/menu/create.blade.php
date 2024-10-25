@extends('admin.master')

@section('title', 'Add Products')

@section('content')
<body class="vertical light">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">Add Product</h2>
            <form method="POST" action="{{ route('admin.menu.store') }}">
                @csrf
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">   
                            <div class="col-md-3">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Product Name" >
                                @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="category">category</label>
                                <select name="category" class="form-control" >
                                    <option value="" disabled selected>Select Type</option>
                                    <option value="breakfast">Breakfast</option>        
                                    <option value="lunch">Lunch</option>        
                                    <option value="dinner">Dinner</option>        
                                </select>
                                @error('category')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" placeholder="Price" required >
                                @error('price')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="image_URL">Image URL</label>
                                <input type="text" name="image_url" class="form-control" placeholder="Image URL">
                            </div>
                            <div class="col-md-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
</div>
@endsection
