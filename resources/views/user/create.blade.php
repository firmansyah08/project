@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Create Category
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
