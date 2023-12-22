{{-- resources/views/projects/showEvaluations.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project->name }} Evaluations</h1>
    <p>Number of Evaluations: {{ $project->evaluations_count }}</p>
</div>
@endsection
