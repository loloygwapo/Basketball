<!-- resources/views/teams/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $team->name }} - Players</h1>
        <h5>City: {{ $team->city }}</h5>

        <h3>Players:</h3>
        @if ($team->players->isEmpty())
            <p>No players available.</p>
        @else
            <ul>
                @foreach ($team->players as $player)
                    <li>{{ $player->name }} ({{ $player->position }})</li>
                @endforeach
            </ul>
        @endif


            <a href="{{ route('teams.showAddPlayerForm', $team->id) }}" class="btn btn-success mt-3">Add Player</a>
        </form>

        <a href="{{ route('teams.index') }}" class="btn btn-secondary mt-3">Back to Teams</a>
    </div>
</body>
</html>
