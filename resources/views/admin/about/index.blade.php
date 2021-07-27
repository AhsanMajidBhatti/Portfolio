@extends('admin.dashboard')

@section('content')

<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Full Name</label>
            <input type="text" class="form-control" id="inputEmail4" value="{{ $about[0]->name }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control" id="inputPassword4" value="{{ $about[0]->email }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">Phone</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">Country</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Degree</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">BirthDate</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection