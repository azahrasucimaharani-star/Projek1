<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BirthdayController extends Controller
{
    /**
     * Tampilkan halaman utama "For My Dear" (PRD F1-F10, satu halaman).
     */
    public function __invoke(Request $request): View|RedirectResponse
    {
        if (! session('gate.tahap1')) {
            return redirect()->route('landing');
        }

        if (! session('gate.tahap2')) {
            return redirect()->route('gate.second');
        }

        $birthday = config('birthday');

        // Ubah path relatif public/ menjadi URL publik agar Blade/JS bisa memakainya.
        // Path kosong dibiarkan kosong supaya fallback JS (placeholder/hitam polos) tetap jalan.
        $birthday['bgImageUrl'] = ! empty($birthday['bgImage']) ? asset($birthday['bgImage']) : '';
        $birthday['songUrl'] = ! empty($birthday['song']) ? asset($birthday['song']) : '';
        $birthday['songYoutubeId'] = $birthday['songYoutubeId'] ?? '';

        $birthday['photos'] = collect($birthday['photos'] ?? [])
            ->map(function (array $photo): array {
                $photo['src'] = ! empty($photo['src']) ? asset($photo['src']) : '';

                return $photo;
            })
            ->all();

        return view('birthday.index', ['birthday' => $birthday]);
    }
}
