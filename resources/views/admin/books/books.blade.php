@extends('layouts.menu.admin')
@section('content-admin')

<div class="row mt-4">
    <a href="{{route('books.create')}}" class=" col-2 ml-auto mr-2<">
        <button type="button" class="btn btn-primary  w-100">Add book</button>
    </a>
</div>
<div class="row mt-4 ">
    <div class="col-12">
        <table class="table table-bordered" id="books_table">
            <thead class="table-dark">
                <tr>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Publication date</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <!-- {{$id=1}} -->
                @foreach($books as $book)<tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>{{$book->publication_date}}</td>
                    @if($book->user!=null)
                    <td>Borrowed</td>
                    @else
                    <td>Available</td>
                    @endif
                    <td class="d-flex justify-content-around">
                        @if(($book->is_available)==1)
                        <button type="submit" onclick="send_id_to_modal('{{$book->id}}')" type="button" class="btn btn-primary btn-success btn-raised btn-sm " data-toggle="modal" data-target="#modal_lend">
                            Change status
                        </button>
                        @else
                        <button type="submit" onclick="send_id_to_modal('{{$book->id}}')" type="button" class="btn btn-primary btn-success btn-raised btn-sm " data-toggle="modal" data-target="#return_modal">
                            Change status
                        </button>
                        @endif
                        <a href="{{route('books.edit', $book->id)}}"><button type="submit" class="btn btn-info btn-raised btn-sm" style="color:whitesmoke">
                                Edit
                            </button></a>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-raised btn-sm">
                                Delete
                            </button>
                        </form>

                    </td>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="modal_lend" tabindex="-1" aria-labelledby="modal_lend_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_lend_label">Lend a book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('lend.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" id="book_id" name="book_id" hidden>
                    <input type="text" id="available_id" name="available_id" value="2" hidden>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Lend the book to:</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            <option value="" disabled selected hidden>Select a user</option>
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary col-md-3 offset-md-9">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="return_modal" tabindex="-1" aria-labelledby="modal_return_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_return_label">Return book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('lend.return')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" id="book_id_return" name="book_id_return" hidden>
                    <input type="text" id="available_id_return" name="available_id_return" value="1" hidden>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Are you sure you want to return the book?</label>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary col-3 mr-2">Yes</button>

                        <button type="button" class=" btn btn-danger col-3 mr-2" data-dismiss="modal">
                            No
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection