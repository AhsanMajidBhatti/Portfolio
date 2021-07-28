@extends('layouts.admin_app')

@section('content')

@if(Session::has('message'))
<div class="alert alert-success">
    {{ @Session::get('message') }}
</div>
@endif

<h3 align="center">Edit Skill</h3>

<form action="{{ route('skill.update', $skill->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Skill Name</label>
        <input type="text" class="form-control" name="skillname" id="exampleFormControlInput1" value="{{ $skill->skillname }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Percentage</label>
        <input type="number" class="form-control" name="percentage" id="exampleFormControlInput1" value="{{ $skill->percentage }}">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection