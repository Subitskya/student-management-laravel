@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Edit Course</div>
    <div class="card-body">
        <form action="{{ url('courses/' . $courses->id) }}" method="post">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <input type="hidden" name="id" id="id" value="{{$courses->id}}"/>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name }}">
            </div>
            <div class="form-group">
                <label for="syllabus">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control" value="{{ $courses->syllabus }}">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control" value="{{ $courses->duration }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection
