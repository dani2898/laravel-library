@extends('layouts.menu.user')
@section('content-user')

<div class="card mt-4">
    <div class="card-header fw-bold">
        Welcome {{auth()->user()->name}} {{auth()->user()->last_name}}
    </div>
    <div class="card-body">
        <p class="card-text">Access to all of the system functions through the menu above.</p>
    </div>
</div>
@endsection