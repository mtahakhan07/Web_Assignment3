<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluatorPreferences;

class EvaluatorPreferencesController extends Controller
{
    // View evaluator preferences
    public function index()
    {
        // Retrieve the evaluator's preferences
        $evaluatorPreferences = EvaluatorPreferences::where('user_id', auth()->id())->first();

        // Return a view to display the preferences
        return view('evaluator.preferences.index', compact('evaluatorPreferences'));
    }

    // Edit evaluator preferences (show form)
    public function edit()
    {
        // Retrieve the evaluator's preferences for the logged-in user
        $evaluatorPreferences = EvaluatorPreferences::where('user_id', auth()->id())->first();

        // Return a view to edit the preferences
        return view('evaluator.preferences.edit', compact('evaluatorPreferences'));
    }

    // Update evaluator preferences
    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'specialty_area' => 'required|string|max:255', // Add validation rules for other preferences
        ]);

        // Update the evaluator's preferences in the database
        EvaluatorPreferences::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'specialty_area' => $request->input('specialty_area'), // Update other preferences as needed
            ]
        );

        // Redirect back with a success message
        return redirect()->route('evaluator.preferences')->with('success', 'Preferences updated successfully');
    }
}
