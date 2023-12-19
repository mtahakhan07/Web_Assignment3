<!-- resources/views/evaluator/preferences/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <div class="container">
        <h1>Evaluator Preferences</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <p><strong>Specialty Area:</strong> {{ $evaluatorPreferences->specialty_area }}</p>
        {{-- Add other preference fields here --}}
        <a href="{{ route('evaluator.preferences.edit') }}" class="btn btn-primary">Edit Preferences</a>
    </div>
@endsection
