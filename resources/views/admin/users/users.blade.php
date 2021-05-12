@extends('layouts.menu.admin')
@section('content-admin')

@if(Session::has('alert'))
<div class="alert alert-{{ Session::get('alert.type') }} alert dismissible mt-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ Session::get('alert.text') }}
</div>
@endif

<div class="row mt-4">
    <a href="{{route('users.create')}}" class=" col-2 ml-auto ">
        <button type="button" class="btn btn-primary  w-100">Add user</button>
    </a>
</div>
<div class="row mt-4">
    <div class="col-12">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col-4">Name</th>
                    <th scope="col-4">E-mail</th>
                    <th scope="col-4">Rol</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <!-- {{$id=1}} -->
                @foreach($users as $user)<tr>
                    <td>{{$user->name}} {{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>@if($user->is_admin==1)
                        Admin
                        @else
                        User
                        @endif
                    </td>
                    <td class="d-flex justify-content-around">
                        <a href="{{route('users.edit', $user->id)}}"><button type="submit" class="btn btn-info btn-raised btn-sm" style="color:whitesmoke">
                                <i class="fas fa-edit"></i> Edit
                            </button></a>

                        <button type="submit" onclick="send_id_to_modal_user('{{$user->id}}')" type="button" class="btn btn-danger btn-success btn-raised btn-sm " data-toggle="modal" data-target="#modal_delete">
                            Delete
                        </button>

                    </td>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</div>

<div class="d-flex justify-content-center">
    {!! $users->links() !!}
</div>


<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="modal_delete_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_delete_label">Delete book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('users.destroy',0)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="text" id="user_id" name="user_id" hidden>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Are you sure you want to delete this user?</label>
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