@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Player to {{ $team->name }}</h1>

    <form action="{{ route('teams.addPlayer', $team->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Player Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Player Position</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Player</button>
    </form>
</div>
@endsection
