@extends('base')
@section('options')

<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
</li>

<li class="nav-item">
    <a href="{{route('books.index')}}" class="nav-link active" aria-current="page" href="#">Books</a>
</li>

<li class="nav-item">
    <a  href="{{route('categories.index')}}" class="nav-link active" aria-current="page" href="#">Categories</a>
</li>

<li class="nav-item">
    <a  href="{{route('users.index')}}" class="nav-link active" aria-current="page" href="#">Users</a>
</li>

<li class="nav-item">
    
<div class="item">
        <form action="{{route('logout')}}" method="post">
            @csrf<button type="submit" class="item-dropdown nav-link active text-left" style="background: none; border: 0px;">
               Log out</button></form>
    </div>
</li>

@endsection


@section('content')
<div class="container">
@yield('content-admin')
</div>
@endsection