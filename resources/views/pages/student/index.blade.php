@extends('layout.backend.main');
@section('page-content')

<div class="card">
    <div class="card-body">
        <div>
            <h5>Student Details</h5>
            <div class="d-flex justify-content-md-end"><a href="/student/create" class="btn btn-success">Create</a></div>
            <hr>

            <div class="table-responsive">
                <table class="table table-striped table-bordered mb-0" id="table3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->roll}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <a href="/student/edit" class="btn btn-primary">Edit</a>
                                <a href="/student/delete" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>


                    @empty
                        <div class="col-6">Data not found</div>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
