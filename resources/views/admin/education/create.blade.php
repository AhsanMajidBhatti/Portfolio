@extends('layouts.admin_app')

@section('content')

<h3 align="center">Create Education</h3>

<form method="POST" action="{{ route('education.store') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Degree</label>
            <input type="text" name="degree" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">University</label>
            <input type="text" name="university" class="form-control">
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
    <div class="form-group">
        <label for="inputAddress2">Description</label>
        <textarea id="test" class="form-control" name="description"></textarea>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('test');
</script>
@endsection