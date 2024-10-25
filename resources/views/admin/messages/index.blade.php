@extends('admin.master')

@section('content')
<body class="vertical light">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>
                            <a href="{{ route('admin.messages.show', ['message' => $message]) }}" class="btn btn-sm btn-success" title="View Message">
                                <i class="fe fe-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination links with Bootstrap styling -->
            {{ $messages->links('pagination::bootstrap-4') }}
        </div>
    </div>
</body>
@endsection
