@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Edit Product
        </div>
        <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $data)
                            <option value="{{ $data->id }}" {{ $selectedCategory == $data->id ? 'selected="selected"' : '' }}>
                                {{ $data->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
