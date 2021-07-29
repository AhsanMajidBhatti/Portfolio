@extends('layouts.admin_app')

@section('content')

<h3 align="center">Update Experience</h3>

<form method="POST" action="{{ route('experience.update', $experience->id) }}">
    @method('PUT')
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Job Title</label>
            <input type="text" name="jobtitle" class="form-control" value="{{ $experience->jobtitle }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Company</label>
            <input type="text" name="company" class="form-control" value="{{ $experience->company }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Start-Date</label>
            <input type="text" class="form-control" name="startdate" value="{{ $experience->startdate }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">End-Date</label>
            <input type="text" class="form-control" name="enddate" value="{{ $experience->enddate }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" value="{{ $experience->city }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Country</label>
            <input type="text" class="form-control" name="country" value="{{ $experience->country }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Description</label>
        <textarea id="test" name="description" class="form-control">{{ $experience->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('test');
</script>
@endsection