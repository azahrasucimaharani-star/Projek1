<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JourneyController extends Controller
{
    /**
     * Halaman Journey Kita (hanya setelah dua sandi benar).
     */
    public function __invoke(): View|RedirectResponse
    {
        if (! session('gate.tahap1')) {
            return redirect()->route('landing');
        }

        if (! session('gate.tahap2')) {
            return redirect()->route('gate.second');
        }

        $journey = [
            'title' => config('birthday.journeyTitle'),
            'conclusion' => config('birthday.journeyConclusion'),
            'song' => ! empty(config('birthday.enchanted')) ? asset(config('birthday.enchanted')) : '',
            'songYoutubeId' => config('birthday.enchantedYoutubeId') ?? '',
            'songStart' => (int) config('birthday.enchantedStart'),
            'songEnd' => (int) config('birthday.enchantedEnd'),
            'photos' => collect(config('birthday.journeyPhotos'))
                ->map(fn (array $photo): array => [
                    'src' => asset($photo['src']),
                    'desc' => $photo['desc'] ?? '',
                ])
                ->all(),
        ];

        return view('journey.index', ['journey' => $journey]);
    }
}
