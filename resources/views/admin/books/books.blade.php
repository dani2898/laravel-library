@extends('layouts.menu.admin')
@section('content-admin')

<div class="row mt-4">
    <a href="{{route('books.create')}}" class=" col-2 ms-auto p-0">
        <button type="button" class="btn btn-primary  w-100">Add book</button>
    </a>
</div>
<div class="row mt-4">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Publication date</th>
                <th scope="col">Borrowed by</th>
                <th scope="col" colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
        <!-- {{$id=1}} -->
            @foreach($books as $book)<tr>
                <th scope="row">{{$id++}}</th>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->category->name}}</td>
                <td>{{$book->publication_date}}</td>
                @if($book->user!=null)
                <td>{{$book->user->name}} {{$book->user->last_name}}</td>
                @else
                <td>Available</td>
                @endif
                <td class="d-flex justify-content-evenly">
                    <a><button type="submit" class="btn btn-success btn-raised btn-sm">
                            <i class="fas fa-handshake"></i> Lend
                        </button></a>
                    <a href="{{route('books.edit', $book->id)}}"><button type="submit" class="btn btn-info btn-raised btn-sm" style="color:whitesmoke">
                            <i class="fas fa-edit"></i> Edit
                        </button></a>
                    <form action="{{route('books.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-raised btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </form>

                </td>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection