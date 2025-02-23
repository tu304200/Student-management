@extends('layout')

@section('content')
    <div class="container">
        <div class="card-header">
            <h2>Payment Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('payments.create') }}" class="btn btn-success btn-sm" title="Add New Payment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />
            <div class="table1">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No</th>
                            <th>Paid Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Correct the loop index -->
                                <td>{{ optional($item->enrollment)->enroll_no }}</td>
                                
                                <td>{{ $item->paid_date }}</td>
                                <td>{{ $item->amount }}</td>

                                <div class="button">
                                    <td>

                                        <a href="{{ url('/payments/' . $item->id) }}" title="View Payment">
                                            <button class="btn btn-info btn-sm">View</button>
                                        </a>

                                        <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>

                                        <form method="POST" action="{{ route('payments.destroy', $item->id) }}"
                                            style="display:inline;">

                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment"
                                                onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    <a href="{{ route('payments.create') }}" class="btn btn-success">Add New Payment</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed for interactivity) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endsection
