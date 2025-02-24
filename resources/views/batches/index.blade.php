@extends('layout')

@section('content')
    <div class="container">
        <div class="card-header">
            <h2>Batches</h2>
        </div>
        <div class="container-fluid">
            
            <div class="card-body">
                <a href="{{ route('batches.create') }}" class="btn btn-success btn-sm" title="Add New Batches">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br />
                <br />
                <div class="table1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Start Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($batches as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> 
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->course->name }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <div class="button">
                                        <td>

                                            <a href="{{ url('/batches/' . $item->id) }}" title="View Batch">
                                                <button class="btn btn-info btn-sm">View</button>
                                            </a>

                                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit Batch">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ route('batches.destroy', $item->id) }}"
                                                style="display:inline;">

                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch"
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
                </div>

                <div class="text-center">
                    <a href="{{ route('batches.create') }}" class="btn btn-success">Add New Batch</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed for interactivity) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endsection
