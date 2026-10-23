# TODO

## Fase 1: Siapkan konten
- [ ] Tulis ucapan ulang tahun (isi `greeting`, `greetingTitle`, `greetingChip`)
- [ ] Pilih 3 foto, crop rasio 3:4, kompres (maks 500 KB per foto)
- [ ] Tulis judul, tanggal, cerita singkat tiap foto
- [ ] Tulis kalimat "bangga" dan 3 alasan bangga
- [ ] Siapkan nama penerima dan namamu (`name`, `sign`)
- [ ] Siapkan gambar background gelap (opsional) dan favicon 64x64
- [ ] Siapkan file lagu milikmu, simpan sebagai `assets/heaven.mp3`

## Fase 2: Pasang ke kode
- [ ] Taruh semua file di folder `assets/`
- [ ] Isi blok `CONFIG` di bagian atas script `index.html`
- [ ] Isi `bgImage`, `song`, dan path `photos[].src`
- [ ] Tambahkan `<meta name="robots" content="noindex">` di `<head>`
- [ ] Ganti `<title>` sesuai keinginan

## Fase 3: Uji lokal (Herd atau Live Server)
- [ ] Efek kursor air: halus, menyatu, memudar, riak muncul
- [ ] Judul hero berefek negatif saat dilewati kursor
- [ ] Tombol Tutup di Ucapan dan Album bekerja, tidak ikut ter-scroll
- [ ] Album: 3 halaman, tombol ←/→ dan panah keyboard, tanpa scrollbar
- [ ] Teks "bangga" menyala per kata saat scroll
- [ ] Kartu alasan muncul bertahap dan miring 3D
- [ ] Musik: on/off, equalizer bergerak, lagu terdengar setelah klik pertama
- [ ] Uji di HP (Chrome Android dan Safari iOS)
- [ ] Uji `prefers-reduced-motion` dan navigasi keyboard
- [ ] Pastikan tidak ada `[...]` placeholder tersisa

## Fase 4: Deploy
- [ ] Pilih hosting: Netlify, Cloudflare Pages, atau Vercel
- [ ] Upload folder `spider-birthday/`
- [ ] Atur nama situs, misalnya `foryou-namanya.netlify.app`
- [ ] Buka link di HP sebagai penerima dan cek semuanya
- [ ] Kirim link di hari ulang tahun

## Opsional (nanti)
- [ ] Countdown menuju hari ulang tahun
- [ ] Confetti saat tombol kejutan ditekan
- [ ] Tambah halaman album (cukup tambah item di `photos`)
- [ ] Proteksi kata sandi sederhana
