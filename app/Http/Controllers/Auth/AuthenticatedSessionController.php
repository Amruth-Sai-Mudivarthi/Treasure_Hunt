<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Team;

use Illuminate\Support\Facades\Hash;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required',
            'password' => 'required',
        ]);

        // Find the team based on team_id
        $team = Team::where('team_id', $request->team_id)->first();

        if ($team && Hash::check($request->password, $team->password)) {
            // Only set login_time if it's the first login
            if (is_null($team->login_time)) {
                $team->update(['login_time' => now()]);
            }

            // Log in the team
            Auth::loginUsingId($team->id);

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['team_id' => 'Invalid credentials']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
