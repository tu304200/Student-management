@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card-header">
                    <h2>Enrollment Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Enroll No</th>
                                    <th>Batch</th>
                                    <th>Student</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Correct the loop index -->
                                        <td>{{ $item->enroll_no }}</td>
                                        <td>{{ $item->batch->name }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>




                                        <td>
                                            <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollment">
                                                <button class="btn btn-info btn-sm">View</button>
                                            </a>
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}"
                                                title="Edit Enrollment">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                            <form method="POST" action="{{ route('enrollments.destroy', $item->id) }}"
                                                style="display:inline;">

                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete Enrollment" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="text-center">
                            <a href="{{ route('enrollments.create') }}" class="btn btn-success">Add New Enrollment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed for interactivity) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endsection
