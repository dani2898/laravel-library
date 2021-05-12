@extends('base')
@section('options')

<li class="nav-item">
    <a href="{{route('admin')}}" class="nav-link active" aria-current="page" href="#">Home</a>
</li>

<li class="nav-item">
    <a href="{{route('my_books.index')}}" class="nav-link active" aria-current="page" href="#">My books</a>
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
@yield('content-user')
</div>
@endsection