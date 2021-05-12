@extends('layouts.menu.user')
@section('content-user')

<div class="row mt-4 ">
    <div class="col-12">
        <table class="table table-bordered" id="books_table">
            <thead class="table-dark">
                <tr>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Publication date</th>
                </tr>
            </thead>
            <tbody>
                <!-- {{$id=1}} -->
                @foreach($books as $book)<tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>{{$book->publication_date}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

@endsection