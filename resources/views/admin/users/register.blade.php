@extends('layouts.menu.admin')
@section('content-admin')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"  placeholder="Password must be 8 characters" required>
                        </div>
                       
                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Password confirmation</label>
                            <input type="password" class="form-control" id="password_confirm"  name="password_confirmation" required>
                        </div>

                        <div class="mb-3">
                        <label for="user_type" class="form-label">User Type</label>
                        <select class="form-select" id="user_type" name="user_type" required>
                            <option value="" disabled selected hidden>Select a role</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
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