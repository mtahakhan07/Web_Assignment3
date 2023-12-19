<!-- resources/views/evaluator/preferences/edit.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <div class="container">
        <h1>Edit Evaluator Preferences</h1>
        <form method="POST" action="{{ route('evaluator.preferences.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="specialty_area">Specialty Area:</label>
                <input type="text" class="form-control" id="specialty_area" name="specialty_area" value="{{ old('specialty_area', $evaluatorPreferences->specialty_area) }}">
            </div>
            {{-- Add form fields for other preferences here --}}
            <button type="submit" class="btn btn-primary">Save Preferences</button>
        </form>
    </div>
@endsection
