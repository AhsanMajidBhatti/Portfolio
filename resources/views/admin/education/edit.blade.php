@extends('layouts.admin_app')

@section('content')

<h3 align="center">Update Education</h3>

<form method="POST" action="{{ route('education.update', $education->id) }}">
    @method('PUT')
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Degree</label>
            <input type="text" name="degree" class="form-control" value="{{ $education->degree }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">University</label>
            <input type="text" name="university" class="form-control" value="{{ $education->university }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Start-Date</label>
            <input type="text" class="form-control" name="startdate" value="{{ $education->startdate }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">End-Date</label>
            <input type="text" class="form-control" name="enddate" value="{{ $education->enddate }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" value="{{ $education->city }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Country</label>
            <input type="text" class="form-control" name="country" value="{{ $education->country }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Description</label>
        <textarea id="test" name="description" class="form-control">{{ $education->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('test');
</script>
@endsection