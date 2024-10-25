@extends('admin.master') <!-- استخدم التخطيط الأساسي الخاص بك -->

@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('success_update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('success_delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('success_delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Menu Management</h1>
        </div>
    </div>

    <!-- زر إضافة وجبة جديدة -->
    <div class="row mb-4">
        <div class="col text-right">
            <a href="{{ route('admin.menu.create') }}" class="btn btn-success btn-lg">
                <i class="fe fe-plus"></i> Add New Meal
            </a>
        </div>
    </div>

    <!-- روابط الفئات -->
    <div class="row mb-4">
        <div class="col">
            <a href="{{ route('admin.menu.breakfast') }}" class="btn btn-outline-primary btn-lg">Breakfast</a>
            <a href="{{ route('admin.menu.lunch') }}" class="btn btn-outline-secondary btn-lg">Lunch</a>
            <a href="{{ route('admin.menu.dinner') }}" class="btn btn-outline-info btn-lg">Dinner</a>
        </div>
    </div>

    <!-- جدول الوجبات -->
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Meal Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($meals->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center">No meals available in the menu.</td>
                        </tr>
                    @else
                        @foreach($meals as $meal)
                            <tr>
                                <td>{{ $meal->name }}</td>
                                <td>
                                    <img src="{{ asset('public/asset/img/' . $meal->image_url) }}" alt="Meal Image" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td>{{ $meal->category }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.menu.show', ['menu'=>$meal->id]) }}" class="btn btn-info btn-sm">
                                        <i class="fe fe-eye"></i> View
                                    </a>
                                    <a href="{{ route('admin.menu.edit', ['menu'=>$meal->id]) }}" class="btn btn-warning btn-sm">
                                        <i class="fe fe-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.menu.destroy', $meal->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this meal?')">
                                            <i class="fe fe-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
