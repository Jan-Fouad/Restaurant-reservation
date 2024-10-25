@extends('admin.master')
@section('content')
{{-- @include('admin.partials.scripts') --}}
{{-- @section('content') --}}
<body class="vertical light">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>date</th>
                        <th>time</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $booking)
                        
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->date}}</td>
                        <td>{{ $booking->time }}</td>
                        
                        <td> <a href="{{ route('admin.booking.show',['booking'=>$booking]) }}" class="btn btn-sn btn-success">
                            <i class="fe fe-eye fe-2x"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
