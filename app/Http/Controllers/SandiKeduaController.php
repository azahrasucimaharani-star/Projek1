<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SandiKeduaController extends Controller
{
    /**
     * Halaman sandi kedua (hanya setelah sandi pertama benar).
     */
    public function __invoke(): View|RedirectResponse
    {
        if (! session('gate.tahap1')) {
            return redirect()->route('landing');
        }

        if (session('gate.tahap2')) {
            return redirect()->route('birthday');
        }

        $second = config('birthday.gate.second');

        return view('gate.second', ['second' => $second]);
    }

    /**
     * Periksa sandi kedua.
     */
    public function periksa(Request $request): RedirectResponse
    {
        if (! session('gate.tahap1')) {
            return redirect()->route('landing');
        }

        $sandi = (string) config('birthday.gate.sandi2');
        $benar = $sandi !== '' && hash_equals(
            $sandi,
            (string) $request->input('sandi')
        );

        if (! $benar) {
            return back()->withErrors(['sandi' => config('birthday.gate.second.error')]);
        }

        session(['gate.tahap2' => true]);

        return redirect()->route('birthday');
    }
}
