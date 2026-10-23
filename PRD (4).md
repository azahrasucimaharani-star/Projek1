# PRD: Website Ulang Tahun "For My Dear"

## 1. Ringkasan
Website satu halaman bertema hitam dengan aksen merah, dibuat sebagai kado ulang tahun untuk pasangan. Pengunjung tunggal (penerima kado) membuka link dan mengalami cerita interaktif: efek kursor cairan merah, ucapan, album foto, dan bagian "alasan aku bangga".

## 2. Tujuan
- Penerima langsung terkesan dalam 5 detik pertama (hero dan efek kursor).
- Seluruh isi personal (nama, ucapan, foto, lagu) diubah dari satu blok `CONFIG` tanpa menyentuh kode lain.
- Gratis di-hosting, tanpa backend, tanpa database.

## 3. Pengguna
- **Pembuat (kamu):** mengisi konten, deploy, membagikan link.
- **Penerima (pacar):** membuka lewat HP atau laptop, hanya membaca dan berinteraksi.

## 4. Lingkup fitur
| # | Fitur | Perilaku |
|---|-------|----------|
| F1 | Hero | Judul "Happy Birthday" besar, nama penerima, petunjuk scroll. Judul berefek negatif (invert warna) saat dilewati efek kursor. |
| F2 | Efek kursor air merah | Tetesan merah menyatu seperti cairan, mengikuti kursor dengan jeda halus, memudar dan mengecil, ada riak. Klik = ledakan tetesan. Tetap terlihat di atas gambar background. |
| F3 | Navigasi | Kiri: teks "for my dear". Kanan: tombol Musik, Ucapan, Album. Latar kaca muncul setelah scroll. |
| F4 | Ucapan | Panel kaca dengan border merah berputar, label, judul, teks diketik otomatis, tanda tangan. |
| F5 | Album | 1 foto per halaman, 3 halaman. Bingkai berhias, judul, tanggal, cerita. Pagination dengan tombol, titik, dan panah keyboard. Scrollbar disembunyikan. |
| F6 | Section "Bangga" | Teks besar yang menyala per kata mengikuti scroll. |
| F7 | Alasan bangga | 3 kartu muncul bertahap, miring 3D mengikuti kursor. |
| F8 | Penutup | Teks outline berjalan ("Proud of you"), judul penutup, tombol baca ucapan. |
| F9 | Musik | Tombol on/off dengan animasi equalizer. Default menyala setelah interaksi pertama (aturan autoplay browser). |
| F10 | Background gambar | Opsional lewat `CONFIG.bgImage`, otomatis diberi lapisan gelap. |

## 5. Kebutuhan non-fungsional
- Responsif: HP 360px sampai desktop lebar.
- Aksesibilitas: fokus keyboard terlihat, `Esc` menutup panel, `prefers-reduced-motion` mematikan efek kursor, ketikan, dan marquee.
- Performa: satu file HTML tanpa library, canvas dibatasi 1.5x DPR, maksimum 520 tetesan.
- Layar sentuh: efek kursor khusus perangkat dengan mouse; di HP tampilan tetap utuh tanpa kursor kustom.
- Ukuran: file HTML di bawah 50 KB, aset gambar dikompres.

## 6. Konten yang harus disiapkan
- Nama penerima dan nama pembuat.
- Teks ucapan.
- 3 foto (rasio 3:4) beserta judul, tanggal, cerita singkat.
- 1 kalimat "bangga" dan 3 alasan (judul + 1-2 kalimat).
- Opsional: gambar background, favicon, file lagu.

## 7. Teknologi dan hosting
- HTML, CSS, JavaScript murni, satu file `index.html`, tanpa build.
- Preview lokal: Laravel Herd (menyajikan folder statis) atau ekstensi Live Server.
- Hosting gratis: Netlify (drag and drop), Cloudflare Pages, Vercel, atau GitHub Pages.

## 8. Risiko dan catatan
- **Hak cipta:** gambar karakter, logo, dan lagu milik pihak lain tidak disertakan. Gunakan file yang kamu miliki atau berlisensi. Untuk link pribadi, tambahkan `<meta name="robots" content="noindex">` agar tidak muncul di mesin pencari.
- **Autoplay:** musik baru bisa mulai setelah pengunjung klik atau tap sekali.
- **Efek cairan:** memakai filter SVG pada canvas; di perangkat lama bisa terasa berat. Kurangi `stdDeviation` atau jumlah tetesan jika patah-patah.
- **Mode difference pada judul:** hasil terbaik di background gelap.

## 9. Kriteria selesai
- Semua fitur F1-F10 berjalan di Chrome, Safari, dan Firefox terbaru, serta di HP.
- Tidak ada teks placeholder berkurung siku `[...]` yang tersisa.
- Link publik dapat dibuka dan lagu dapat diputar setelah interaksi.
