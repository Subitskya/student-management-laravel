@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Student Details</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-ttle">Name: {{ $students->name }}</h5>
                <p class="card-text">Address: {{ $students->address }}</p>
                <p class="card-text">Mobile: {{ $students->mobile }}</p>
            </div>          
        </div>
</div>
@endsection
