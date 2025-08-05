<?php

namespace App\Controllers\Auth;

use Inertia\Inertia;
use Inertia\Response;
use Support\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EmailVerificationPromptController extends Controller
{
    /**
     * Show the email verification prompt page.
     */
    public function __invoke(Request $request): RedirectResponse|Response
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : Inertia::render('auth/VerifyEmail', ['status' => $request->session()->get('status')]);
    }
}
