<?php

namespace App\Http\Controllers;

use App\Models\Guess;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GuessController extends Controller
{
    /**
     * Create a new guess.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'guess' => 'required|integer',
            'email' => 'required|email|unique:guesses,email',
            'phone' => 'nullable|string',
            'source' => 'nullable|string',
            'optin' => 'nullable|boolean',
        ], [
            "email.required" => "Bitte gib eine E-Mail-Adresse an.",
            "email.email" => "Bitte gib eine gültige E-Mail-Adresse an.",
            "email.unique" => "Diese E-Mail-Adresse wurde bereits verwendet.",
        ]);

        $validated["uuid"] = Str::uuid()->toString();
        $guess = Guess::create($validated);
        session(["guess" => $guess->uuid]);
        if ($validated["source"]) {
            $sourceGuess = Guess::where("uuid", $validated["source"])->first();
            if ($sourceGuess) {
                $sourceGuess->tickets += 1;
                $sourceGuess->save();
            }
        }
        return redirect("/gewinnspiel-3");
    }
}
