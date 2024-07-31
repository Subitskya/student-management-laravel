@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Edit Batch</div>
    <div class="card-body">
        <form action="{{ url('batches/' . $batch->id) }}" method="post">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <input type="hidden" name="id" id="id" value="{{$batch->id}}"/>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $batch->name }}">
            </div>
            <div class="form-group">
                <label for="course_id">Course</label>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $course->id == $batch->course_id ? 'selected' : '' }}>{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="text" name="start_date" id="start_date" class="form-control" value="{{ $batch->start_date }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>
</div>

<script>
    $(function() {
        $("#start_date").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
</script>
@endsection
