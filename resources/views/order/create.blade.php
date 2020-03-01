@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Create Product
        </div>
        <div class="card-body">
            <form action="{{ route('order.store') }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label for="category">Product</label>
                    <select name="product_id" class="form-control" required>
                        <option value="">Product</option>
                        @foreach($products as $data)
                            <option value="{{ $data->id }}">
                                {{ $data->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
