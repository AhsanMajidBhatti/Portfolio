@extends('layouts.admin_app')

@section('content')

@if(Session::has('message'))
<div class="alert alert-success">
    {{ @Session::get('message') }}
</div>
@endif

<form method="POST" action="{{ route('dashboard.about.store') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $profile != null ? $profile->email : '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $profile != null ? $profile->address : '' }}">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Description</label>
        <input type="text" class="form-control" name="description" value="{{ $profile != null ? $profile->description : '' }}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $profile != null ? $profile->phone : '' }}">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" value="{{ $profile != null ? $profile->city : '' }}">
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">Country</label>
            <input type="text" class="form-control" name="country" value="{{ $profile != null ? $profile->country : '' }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">BirthDate</label>
            <input type="text" class="form-control" placeholder="15-Jan-1930" name="birthdate" value="{{ $profile != null ? $profile->birthdate : '' }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Degree</label>
            <input type="text" class="form-control" placeholder="e.g Bachelors, Master" name="degree" value="{{ $profile != null ? $profile->degree : '' }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection