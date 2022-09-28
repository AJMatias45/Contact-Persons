@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Email Address</th>
                </tr>
                @foreach ($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->id }}</td>
                    <td>{{ $inquiry->CompleteName }}</td>
                    <td>{{ $inquiry->ContactNumber }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->id }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>