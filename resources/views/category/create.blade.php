@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Create Category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
