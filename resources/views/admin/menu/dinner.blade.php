@extends('admin.master')
@section('content')

<body class="vertical light">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>price</th>
                        <th>image</th>
                        <th>description</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dinner as $meal)
                        
                    <tr>
                        <td>{{ $meal->name }}</td>
                        <td>{{ $meal->price }}</td>
                        <td>
                            <img src="{{ asset('public/asset/img/' . $meal->image_url) }}" alt="Meal Image" style="max-width: 100px; max-height: 100px;">
                        </td>
                        
                        <td>{{ $meal ->descrption }}</td>
                         
                         <td> <a href="{{ route('admin.menu.show',['menu'=>$breakfast->id]) }}" class="btn btn-sn btn-success">
                            <i class="fe fe-edit fe-2x"></a></td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
