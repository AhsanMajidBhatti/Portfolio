@extends('layouts.admin_app')

@section('content')

<h3 align="center">Update Certification</h3>

<form method="POST" action="{{ route('certification.update', $certification->id) }}">
    @method('PUT')
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4">Certification</label>
            <input type="text" name="certification" class="form-control" value="{{ $certification->certification }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Start-Date</label>
            <input type="text" class="form-control" name="startdate" value="{{ $certification->startdate }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">End-Date</label>
            <input type="text" class="form-control" name="enddate" value="{{ $certification->enddate }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" value="{{ $certification->city }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Country</label>
            <input type="text" class="form-control" name="country" value="{{ $certification->country }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection