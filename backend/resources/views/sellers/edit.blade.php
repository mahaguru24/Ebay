@extends('layouts.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="">Update a seller</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form method="post" action="{{ route('sellers.update', $seller->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="Name">Name:</label>
                    <input type="name" class="form-control" name="name" value={{ $seller->name }} />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value={{ $seller->email }} />
                </div>
                <div class="d-flex justify-content-end align-items-center py-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
