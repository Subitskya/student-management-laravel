@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batch Details</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-ttle">Name: {{ $batches->name }}</h5>
                <p class="card-text">Course: {{ $batches->course_id }}</p>
                <p class="card-text">Start Date: {{ $batches->start_date }}</p>
            </div>          
        </div>
</div>
@endsection
