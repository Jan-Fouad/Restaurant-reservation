@extends('admin.master')
@section('content')
{{-- @include('admin.partials.scripts') --}}
{{-- @section('content') --}}
<body class="vertical light">
    <div class="row justify-content-center">
        <div class="col-12">
          <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>price</th>
                        <th>image</th>
                        <th>description</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($breakfast as $meal)
                        
                    <tr>
                        <td>{{ $meal->name }}</td>
                        <td>{{ $meal->price }}</td>
                        <td>
                            <img src="{{ asset('public/asset/img/' . $meal->image_url.'jpg') }}" alt="Meal Image" style="max-width: 100px; max-height: 100px;">
                        </td>
                        
                        <td>{{ $meal ->descrption }}</td>
                         
                        <td class="text-center">
                            <a href="{{ route('admin.menu.show', $meal->id) }}" class="btn btn-info btn-sm">
                                <i class="fe fe-eye"></i> View
                            </a>
                            <a href="{{ route('admin.menu.edit', $meal->id) }}" class="btn btn-warning btn-sm">
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
