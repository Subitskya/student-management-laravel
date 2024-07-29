@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher Details</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-ttle">Name: {{ $teachers->name }}</h5>
                <p class="card-text">Address: {{ $teachers->address }}</p>
                <p class="card-text">Mobile: {{ $teachers->mobile }}</p>
            </div>          
        </div>
</div>
@endsection
