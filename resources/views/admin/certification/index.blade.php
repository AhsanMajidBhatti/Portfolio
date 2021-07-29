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
            <th scope="col">Certification</th>
            <th scope="col">Start-Date</th>
            <th scope="col">End-Date</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($certifications as $certification)
            <tr>
                <td>{{ $certification->id }}</td>
                <td>{{ $certification->certification }}</td>
                <td>{{ $certification->startdate }}</td>
                <td>{{ $certification->enddate }}</td>
                <td>{{ $certification->city }}</td>
                <td>{{ $certification->country }}</td>
                <td>
                    <a href="{{ route('certification.edit', $certification->id) }}">
                        <button class="btn btn-primary btn-sm">EDIT</button>
                    </a>
                    <form action="{{ route('certification.destroy', $certification->id) }}" method="POST" class="btn btn-sm">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">DANGER</button>
                    </form>
                </td>
            </tr>
        @empty
            <td>No Certification</td>
        @endforelse
    </tbody>
</table>

@endsection