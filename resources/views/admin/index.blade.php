@extends('layouts.menu.admin')
@section('content-admin')

<div class="card mt-4">
    <div class="card-header">
        Welcome {{auth()->user()->name}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection