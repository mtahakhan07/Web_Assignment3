<!-- resources/views/projects/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Project</h1>
    <form method="POST" action="/projects">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
