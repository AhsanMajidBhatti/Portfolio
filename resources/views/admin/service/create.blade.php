@extends('layouts.admin_app')

@section('content')

<h3 align="center">Create Service</h3>

<form method="POST" action="{{ route('service.store') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4">URL</label>
            <input type="text" name="linkurl" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Overview</label>
        <textarea id="test" class="form-control" name="smalloverview"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('test');
</script>
@endsection