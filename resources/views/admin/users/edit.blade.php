@extends('layouts.menu.admin')
@section('content-admin')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('users.update', $user->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail Address</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" required>
                        </div>

                      


                        <div class="mb-3">
                            <label for="user_type" class="form-label">User Type</label>
                            <select class="form-select" id="user_type" name="user_type" required>
                                    @if($user->is_admin == 1)
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    @else
                                    <option value="2">User</option>
                                    <option value="1">Admin</option>
                                    @endif
                                </select>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary col-md-3 offset-md-9">Submit</button>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection