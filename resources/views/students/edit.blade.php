@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
        <form action="{{ url('students/' . $student->id) }}" method="post">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <input type="hidden" name="id" id="id" value="{{$student->id}}"/>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $student->address }}">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $student->mobile }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection
