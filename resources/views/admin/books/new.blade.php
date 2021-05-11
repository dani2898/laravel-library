@extends('layouts.menu.admin')
@section('content-admin')
<div class="row mt-4">
    <div class="col-6 mx-auto">
        <div class="card">
            <div class="card-header">
                New book
            </div>
            <div class="card-body">
                <form action="{{route('books.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="book_name" class="form-label">Book title</label>
                        <input type="text" class="form-control" id="book_name" name="book_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="book_author" class="form-label">Book author</label>
                        <input type="text" class="form-control" id="book_author" name="book_author" required>
                    </div>

                    <div class="mb-3">
                        <label for="book_category" class="form-label">Book category</label>
                        <select class="form-select" id="book_category" name="book_category" required>
                            <option value="" disabled selected hidden>Select a category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="book_publication_date" class="form-label">Publication date</label>
                        <input type="date" class="form-control" id="book_publication_date" name="book_publication_date" required>
                    </div>


                    <button type="submit" class="btn btn-primary col-md-3 offset-md-9">Submit</button>
                    
                </form>
            </div>
        </div>

    </div>
</div>
@endsection