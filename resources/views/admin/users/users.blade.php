@extends('layouts.menu.admin')
@section('content-admin')

<div class="row mt-4">
    <a href="{{route('users.create')}}" class=" col-2 ms-auto p-0">
        <button type="button" class="btn btn-primary  w-100">Add user</button>
    </a>
</div>
<div class="row mt-4">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col-4">Name</th>
                <th scope="col-4">E-mail</th>
                <th scope="col-4">Rol</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            <!-- {{$id=1}} -->
            @foreach($users as $user)<tr>
                <th scope="row">{{$id++}}</th>
                <td>{{$user->name}} {{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>@if($user->is_admin==1)
                    Admin
                    @else
                    User
                    @endif
                </td>
                <td class="d-flex justify-content-evenly">
                    <a href="{{route('users.edit', $user->id)}}"><button type="submit" class="btn btn-info btn-raised btn-sm" style="color:whitesmoke">
                            <i class="fas fa-edit"></i> Edit
                        </button></a>
                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
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

<div class="d-flex justify-content-center">
    {!! $users->links() !!}
</div>

@endsection