
@extends('layouts.base')

@section('title', 'Page Title')

@section('main')

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between align-items-center py-4">
        <h3 class="">All sellers</h3>
        <a style="" href="{{ route('sellers.create')}}" class="btn btn-primary">New Seller</a>
    </div>
    <table class="table text-center mx-auto">
        <thead>
        <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2 max-w-20">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2"></th>
            <th class="px-4 py-2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($sellers as $seller)
            <tr class="py-3 border-top">
                <td class="p-4">{{ $seller->id }}</td>
                <td class="p-4  max-w-20">{{ $seller->name }}</td>
                <td class="p-4">{{ $seller->email }}</td>
                <td class="p-3">
                    <a href="{{ route('sellers.edit', ['id' => $seller->id])}}" class="btn btn-primary w-100">Edit</a>
                </td>
                <td class="p-3">
                    <form action="{{ route('sellers.destroy', ['id' => $seller->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger w-100">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center p-5 font-weight-bold">No records</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
