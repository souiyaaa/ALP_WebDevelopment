<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Competition;
use App\Models\Participant;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function indexCompetition()
    {
        $lastcompetition = Competition::latest()->first();
        $countdown = $lastcompetition->countdown();

        return view('home', [
            'title' => 'Project',
            'competition' => $lastcompetition,
            'countdown_days' => $countdown['days'],
            'countdown_hours' => $countdown['hours'],
            'countdown_minutes' => $countdown['minutes']
        ]);
    }

    public function showCategory()
    {
        $lastcompetition = Competition::latest()->first();
        $allCategories = $lastcompetition->categories;

        return view('competition', [
            'title' => 'Competition',
            'categories' => $allCategories
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:participants',
            'password' => 'required|string|min:6',
            'dob' => 'required|date',
         'location' => 'required|string|max:255', 

        ]);
    
        // Create new participant
        $participant = Participant::create([
            'participant_name' => $validatedData['name'],
            'participant_email' => $validatedData['email'],
            'participant_password' => bcrypt($validatedData['password']),
            'participant_dob' => $validatedData['dob'],
            'participant_location' => $validatedData['location'],
            
        ]);
    
        // Redirect or handle login after registration
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    
}
