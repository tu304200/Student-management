@extends('layout')

@section('content')
    <!-- resources/views/teachers/index.blade.php -->

    <div class="container">
        <div class="container-fluid">
            <h2>Teacher Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('teachers.create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Mobile</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Correct the loop index -->
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->age }}</td>
                                <td>
                                    <!-- View teacher -->
                                    <a href="{{ url('/teachers/' . $item->id) }}" title="View Teacher">
                                        <button class="btn btn-info btn-sm">View</button>
                                    </a>
                                    <!-- Edit teacher -->
                                    <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                        </button>
                                    </a>
                                    <!-- Delete teacher -->
                                    <form method="POST" action="{{ route('teachers.destroy', $item->id) }}"
                                        style="display:inline;">

                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher"
                                            onclick="return confirm('Confirm delete?')">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Button to add new teacher -->
                <div class="text-center">
                    <a href="{{ route('teachers.create') }}" class="btn btn-success">Add New Teacher</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed for interactivity) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endsection
