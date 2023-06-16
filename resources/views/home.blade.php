@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <h5>{{ Auth::user()->nama }}</h5>
    <p>We never know if we never try.</p>
        </div>
    </div>
@endsection