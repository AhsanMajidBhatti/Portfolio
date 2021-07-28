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
            <th scope="col">Skill</th>
            <th scope="col">Percentage</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @isset($skills)
            @foreach($skills as $skill)
            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->skillname }}</td>
                <td>{{ $skill->percentage }}</td>
                <td>
                    <a href="{{ route('skill.edit', $skill->id) }}">
                        <button class="btn btn-primary btn-sm">EDIT</button>
                    </a>
                    <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" class="btn btn-sm">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">DANGER</button>
                    </form>
                </td>
            </tr>
            @endforeach
        @else
            <td>No Skills</td>
        @endisset
    </tbody>
</table>

@endsection