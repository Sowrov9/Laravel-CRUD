@extends("layout.backend.main")
@section("page-content")

<div class="card radius-15">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Customers Details</h4>
        </div>
        <div class="d-flex">
            <a href="customer/create" class="btn btn-success">Create Customer</a>
        </div>
        <hr/>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        @if (auth()->user()->isAdmin())
                        <th scope="col">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            @if (auth()->user()->isAdmin())
                            <td>
                                <a href="{{url("customer/{$customer->id}")}}" class="btn btn-primary">Show</a>
                                <a href="{{url("customer/{$customer->id}/edit")}}" class="btn btn-secondary">Edit</a>
                               <form action="{{url('customer/'.$customer->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-success">Delete</button>
                               </form>
                            </td>
                            @endif

                        </tr>
                    @empty
                        <div>Data not found</div>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-5">
                {!! $customers->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>


@endsection
