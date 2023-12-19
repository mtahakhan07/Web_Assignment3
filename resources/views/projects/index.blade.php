<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Project List</h1>
    <a href="/projects/create" class="btn btn-primary">Create Project</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a href="/projects/{{ $project->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/projects/{{ $project->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
