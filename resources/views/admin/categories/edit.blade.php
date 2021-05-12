@extends('layouts.menu.admin')
@section('content-admin')
<div class="row mt-4">
    <div class="col-6 mx-auto">
        <div class="card">
            <div class="card-header">
                Edit category
            </div>
            <div class="card-body">
                <form action="{{route('categories.update', $category->id)}}" method="POST"> 
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->name}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="category_description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="category_description" name="category_description" value="{{$category->description}}" required>
                    </div>

                    <button type="submit" class="btn btn-primary col-md-3 offset-md-9">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection