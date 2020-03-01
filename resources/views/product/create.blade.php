@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Create Product
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Category</option>
                        @foreach($categories as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

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
