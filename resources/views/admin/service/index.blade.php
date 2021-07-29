@extends('layouts.admin_app')

@section('content')

@if(Session::has('message'))
<div class="alert alert-success">
    {{ @Session::get('message') }}
</div>
@endif

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">URL</th>
            <th scope="col">Overview</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->linkurl }}</td>
                <td>{!! $service->smalloverview !!}</td>
                <td>
                    <a href="{{ route('service.edit', $service->id) }}">
                        <button class="btn btn-primary btn-sm">EDIT</button>
                    </a>
                    <form action="{{ route('service.destroy', $service->id) }}" method="POST" class="btn btn-sm">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">DANGER</button>
                    </form>
                </td>
            </tr>
        @empty
            <td>No Services</td>
        @endforelse
    </tbody>
</table>

@endsection