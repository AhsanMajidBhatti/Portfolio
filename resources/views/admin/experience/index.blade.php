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
            <th scope="col">Job Title</th>
            <th scope="col">Start-Date</th>
            <th scope="col">End-Date</th>
            <th scope="col">Company</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($experiences as $experience)
            <tr>
                <td>{{ $experience->id }}</td>
                <td>{{ $experience->jobtitle }}</td>
                <td>{{ $experience->startdate }}</td>
                <td>{{ $experience->enddate }}</td>
                <td>{{ $experience->company }}</td>
                <td>{{ $experience->city }}</td>
                <td>{{ $experience->country }}</td>
                <td>{{ \Illuminate\Support\Str::limit($experience->description, 10, $end='...') }}</td>
                <td>
                    <a href="{{ route('experience.edit', $experience->id) }}">
                        <button class="btn btn-primary btn-sm">EDIT</button>
                    </a>
                    <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" class="btn btn-sm">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">DANGER</button>
                    </form>
                </td>
            </tr>
        @empty
            <td>No Experience</td>
        @endforelse

    </tbody>
</table>

@endsection