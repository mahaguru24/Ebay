@extends('layouts.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3>Add a seller</h3>
            <div>
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


                <form method="post" action="{{ route('sellers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email"/>
                    </div>

                    <div class="d-flex justify-content-end align-items-center py-4">
                        <button type="submit" class="btn btn-primary">Add seller</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
