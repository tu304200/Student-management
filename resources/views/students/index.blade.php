@extends('layout')

@section('content')
    <!-- resources/views/students/index.blade.php -->

    <div class="container">
        <div class="card-header">
            <h2>Student Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('students.create') }}" class="btn btn-success btn-sm" title="Add New Student">
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
                            <th>Address</th>
                            <th>Age</th>
                            <th>Mobile</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Correct the loop index -->
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->age }}</td>
                                <div class="button">
                                    <td>
                                        <!-- View Student -->
                                        <a href="{{ url('/students/' . $item->id) }}" title="View Student">
                                            <button class="btn btn-info btn-sm">View</button>
                                        </a>
                                        <!-- Edit Student -->
                                        <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>
                                        <!-- Delete Student -->
                                        <form method="POST" action="{{ route('students.destroy', $item->id) }}"
                                            style="display:inline;">

                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
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

                <!-- Button to add new student -->
                <div class="text-center">
                    <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional, if needed for interactivity) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endsection
