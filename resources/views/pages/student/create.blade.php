@extends('layout.backend.main');
@section('page-content')
<h1>Create Student Details</h1>
<form action="/student/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Roll</label>
        <input type="text" name="roll" value="{{old('roll')}}" class="form-control">
        @error('roll')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{old('address')}}" class="form-control">
        @error('address')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="photo" value="{{old('photo')}}" class="form-control">
        
        @error('photo')
            <span style="color: red">{{$message}}</span>
        @enderror
    </div>
    <button type="submit">Create</button>
</form>
@endsection
