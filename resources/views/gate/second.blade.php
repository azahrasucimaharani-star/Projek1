<!doctype html>
{{-- resources/views/gate/second.blade.php — Halaman sandi kedua. --}}
{{-- Seluruh teks berasal dari config/birthday.php via $second. --}}
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="robots" content="noindex">
<title>{{ $second['title'] ?? 'Sandi Kedua' }}</title>
<style>
:root{--bg:#050506;--fg:#f2f2f2;--muted:#a9a9b0;--red:#f4a4c0;--red2:#fbc7dc;--line:#33333a}
body{margin:0;background:var(--bg);color:var(--fg);font-family:'Space Grotesk',system-ui,sans-serif}
.wrap{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px;box-sizing:border-box}
.card{width:100%;max-width:520px;box-sizing:border-box;text-align:center;padding:48px 36px;border-radius:28px;background:linear-gradient(#0d0d10,#0d0d10) padding-box,conic-gradient(#f4a4c0,#33333a,#fbc7dc,#33333a,#f4a4c0) border-box;border:2px solid transparent}
.mark{width:56px;height:56px;margin:0 auto 20px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:24px;font-weight:700;color:#050506;background:var(--red)}
.card h1{margin:0 0 14px;font-size:clamp(26px,5vw,38px);letter-spacing:.02em}
.card p{margin:0 0 30px;color:var(--muted);line-height:1.7;font-size:16px}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;min-height:48px;padding:0 34px;border-radius:999px;border:1px solid var(--red);background:var(--red);color:#050506;font:700 15px 'Space Grotesk',sans-serif;letter-spacing:.04em;text-decoration:none;cursor:pointer}
.field{margin:0 0 18px}
.field input{width:100%;box-sizing:border-box;min-height:48px;padding:0 20px;border-radius:999px;border:1px solid var(--line);background:rgba(20,20,24,.55);color:var(--fg);font:500 15px 'Space Grotesk',sans-serif;text-align:center;outline:none}
.field input:focus{border-color:var(--red2)}
.err{margin:-8px 0 18px;color:var(--red2);font-size:14px}
</style>
</head>
<body>
<main class="wrap">
<div class="card">
<div class="mark" aria-hidden="true">2</div>
<h1>{{ $second['heading'] ?? '' }}</h1>
<p>{{ $second['text'] ?? '' }}</p>
<form method="POST" action="{{ route('gate.second.periksa') }}">
@csrf
<div class="field"><input type="password" name="sandi" placeholder="Sandi kedua" autocomplete="off" required></div>
@error('sandi')<div class="err">{{ $message }}</div>@enderror
<button class="btn" type="submit">{{ $second['button'] ?? 'Masuk' }}</button>
</form>
</div>
</main>
</body>
</html>
