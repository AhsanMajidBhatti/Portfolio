@extends('layouts.admin_app')

@section('content')

@if(Session::has('message'))
<div class="alert alert-success">
    {{ @Session::get('message') }}
</div>
@endif

<h3 align="center">Create Skill</h3>

<form action="{{ route('skill.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Skill Name</label>
        <input type="text" class="form-control" name="skillname" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Percentage</label>
        <input type="number" class="form-control" name="percentage" id="exampleFormControlInput1" placeholder="Enter 1-100">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection