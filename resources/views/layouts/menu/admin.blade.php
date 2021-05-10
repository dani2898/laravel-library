@extends('base')
@section('options')

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
</li>

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Books</a>
</li>

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Categories</a>
</li>

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Users</a>
</li>

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Log out</a>
</li>

@endsection


@section('content')
<div class="container">
@yield('content-admin')
</div>
@endsection