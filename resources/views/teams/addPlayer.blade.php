<!-- resources/views/teams/addPlayer.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Player to Team</title>
    <!-- Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Player to {{ $team->name }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('teams.addPlayer', $team->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Player Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Player Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Player</button>
        </form>

        <a href="{{ route('teams.show', $team->id) }}" class="btn btn-secondary mt-3">Back to Team</a>
    </div>
</body>
</html>
