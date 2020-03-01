@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="text-center card-header">Data Order</div>
            <div class="card-title text-center mt-3">
                <a href="{{ route('order.create') }}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Transaciton Date</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($orders as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->transaction_date }}</td>
                                <td>
                                    <a href="{{ route('order.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('order.destroy', $data->id) }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
