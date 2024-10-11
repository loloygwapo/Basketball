<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Player;
class TeamController extends Controller
{
    // Show all teams
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    // Show form to create a new team
    public function create()
    {
        return view('teams.create');
    }

    // Store a new team
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        Team::create($request->all());

        return redirect()->route('teams.index')
                         ->with('success', 'Team created successfully.');
    }

    // Show a specific team
    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    // Show form to edit an existing team
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    // Update an existing team
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        $team->update($request->all());

        return redirect()->route('teams.index')
                         ->with('success', 'Team updated successfully.');
    }

    // Delete a team
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index')
                         ->with('success', 'Team deleted successfully.');
    }

    public function showAddPlayerForm($team_id)
    {
        $team = Team::findOrFail($team_id);
        return view('teams.addPlayer', compact('team'));
    }

    // Add a player to a team
    public function addPlayer(Request $request, $team_id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);

        // Find the team
        $team = Team::findOrFail($team_id);

        // Create a new player and associate with the team
        Player::create([
            'name' => $request->name,
            'position' => $request->position,
            'team_id' => $team->id,
        ]);

        return redirect()->route('teams.show', $team->id)
                         ->with('success', 'Player added successfully.');
    }
}
