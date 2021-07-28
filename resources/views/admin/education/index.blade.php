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
            <th scope="col">Degree</th>
            <th scope="col">Start-Date</th>
            <th scope="col">End-Date</th>
            <th scope="col">University</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @isset($educations)
            @foreach($educations as $education)
            <tr>
                <td>{{ $education->id }}</td>
                <td>{{ $education->degree }}</td>
                <td>{{ $education->startdate }}</td>
                <td>{{ $education->enddate }}</td>
                <td>{{ $education->university }}</td>
                <td>{{ $education->city }}</td>
                <td>{{ $education->country }}</td>
                <td>{{ \Illuminate\Support\Str::limit($education->description, 10, $end='...') }}</td>
                <td>
                    <a href="{{ route('education.edit', $education->id) }}">
                        <button class="btn btn-primary btn-sm">EDIT</button>
                    </a>
                    <form action="{{ route('education.destroy', $education->id) }}" method="POST" class="btn btn-sm">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">DANGER</button>
                    </form>
                </td>
            </tr>
            @endforeach
        @else
            <td>No Education</td>
        @endisset
    </tbody>
</table>

@endsection