@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Edit Category
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
