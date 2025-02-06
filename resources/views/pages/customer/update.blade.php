@extends('layout.backend.main')
@section('page-content')

<div class="row">
    <div class="col-12 col-lg-10">
        <div class="card radius-15 border-lg-top-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class='bx bxs-user mr-1 font-24 text-primary'></i>
                    </div>
                    <h4 class="mb-0 text-primary">Customer Update</h4>
                </div>
                <hr/>
                <form action="{{url("customer/{$customer->id}")}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$customer->name}}" class="form-control radius-30" />
                                @error('name')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$customer->email}}" class="form-control radius-30" />
                                @error('email')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{$customer->phone}}" class="form-control radius-30" />
                                @error('phone')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$customer->address}}" class="form-control radius-30" />
                                @error('address')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary px-5 radius-30">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
