@extends('layouts.menu.admin')
@section('content-admin')
<div class="row mt-4">
    <div class="col-6 mx-auto">
        <div class="card">
            <div class="card-header">
                Edit book
            </div>
            <div class="card-body">
                <form action="{{route('books.update', $book->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="book_name" class="form-label">Book title</label>
                        <input type="text" class="form-control" id="book_name" name="book_name" value="{{$book->name}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="book_author" class="form-label">Book author</label>
                        <input type="text" class="form-control" id="book_author" name="book_author" value="{{$book->author}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="book_category" class="form-label">Book category</label>
                        <select class="form-select" id="book_category" name="book_category" required>
                            <option value="{{ $book->category->id }}">{{ $book->category->name }}</option>
                            @foreach($categories as $category)
                            @if($category->id != $book->category->id)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="book_publication_date" class="form-label">Publication date</label>
                        <input type="date" class="form-control" id="book_publication_date" name="book_publication_date" value="{{$book->publication_date}}" required>
                    </div>


                    <button type="submit" class="btn btn-primary ms-auto">Save</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection