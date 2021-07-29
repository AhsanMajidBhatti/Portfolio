@extends('layouts.admin_app')

@section('content')

<h3 align="center">Create Certification</h3>

<form method="POST" action="{{ route('certification.store') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4">Certification</label>
            <input type="text" name="certification" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Start-Date</label>
            <input type="text" class="form-control" name="startdate" placeholder="e.g (2015, Present, etc)">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">End-Date</label>
            <input type="text" class="form-control" name="enddate" placeholder="e.g (2015, Present, etc)">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Country</label>
            <input type="text" class="form-control" name="country">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection