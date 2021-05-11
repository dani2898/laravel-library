@extends('layouts.menu.admin')
@section('content-admin')

<div class="row mt-4">
    <a href="{{route('categories.create')}}" class=" col-2 ms-auto p-0">
        <button type="button" class="btn btn-primary  w-100">Add category</button>
    </a>
</div>
<div class="row mt-4">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col-4">Category</th>
                <th scope="col-4">Description</th>
                <th scope="col" >Options</th>
            </tr>
        </thead>
        <tbody>
        <!-- {{$id=1}} -->
            @foreach($categories as $category)<tr>
                <th scope="row">{{$id++}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td class="d-flex justify-content-evenly">
                    <a href="{{route('books.edit', $category->id)}}"><button type="submit" class="btn btn-info btn-raised btn-sm" style="color:whitesmoke">
                            <i class="fas fa-edit"></i> Edit
                        </button></a>
                    <form action="{{route('books.destroy', $category->id)}}" method="POST">
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