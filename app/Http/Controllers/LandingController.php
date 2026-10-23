<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Halaman info sebelum halaman utama birthday.
     */
    public function __invoke(): View|RedirectResponse
    {
        if (session('gate.tahap1')) {
            return redirect()->route('gate.second');
        }

        $landing = config('birthday.landing');

        return view('landing.index', ['landing' => $landing]);
    }

    /**
     * Periksa sandi pertama.
     */
    public function periksa(Request $request): RedirectResponse
    {
        $sandi = (string) config('birthday.gate.sandi1');
        $benar = $sandi !== '' && hash_equals(
            $sandi,
            (string) $request->input('sandi')
        );

        if (! $benar) {
            return back()->withErrors(['sandi' => 'Sandi salah, coba lagi.']);
        }

        session(['gate.tahap1' => true]);

        return redirect()->route('gate.second');
    }
}
