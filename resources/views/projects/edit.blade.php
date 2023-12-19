<!-- resources/views/projects/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
