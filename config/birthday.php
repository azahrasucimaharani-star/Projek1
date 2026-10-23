<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Birthday — Satu-satunya tempat edit konten (pengganti blok CONFIG)
    |--------------------------------------------------------------------------
    |
    | PRD F1-F10: seluruh isi personal (nama, ucapan, foto, lagu) diubah dari
    | sini tanpa menyentuh kode lain. TODO Fase 1 + Fase 2 dipenuhi di file ini:
    | taruh file di folder public/assets/, lalu isi path di bawah.
    |
    */

    'title' => 'For My Dear',

    'name' => '(≧ヮ≦)',

    'sign' => '— Dari Acuu      ',

    // Kosong = hitam polos. Contoh: 'assets/bg.jpg'
    'bgImage' => '',

    // Taruh file lagu milikmu di public/assets/heaven.mp3
    'song' => 'assets/heaven.mp3',

    // Cadangan saat file MP3 di atas belum ada: ID video YouTube resmi.
    // '3eT464L1YRA' = Bryan Adams – Heaven (Official Music Video).
    'songYoutubeId' => '3eT464L1YRA',

    'greetingTitle' => 'Happy Birthday, Sweet Boy',

    // Versi Bahasa Indonesia dari 'greeting' — ditampilkan saat tombol translate ditekan.
    'greetingId' => <<<'TEXT'
        Selamat ulang tahun, sayang.

        Semoga hidupmu selalu dipenuhi kebahagiaan, senyum yang tulus, tawa yang bermakna, dan orang-orang yang benar-benar menghargaimu.

        Semoga kesabaranmu menuntunmu pada sesuatu yang layak diperjuangkan, rasa sakitmu tergantikan dengan kebahagiaan, dan konsistensimu membangun kehidupan yang pantas kamu dapatkan.

        Seiring bertambahnya usiamu, aku berharap kamu menjadi laki-laki yang tahu persis apa yang dia mau. Laki-laki yang berdiri teguh pada prinsipnya, mengambil keputusannya sendiri, dan berani bertanggung jawab atas setiap pilihan yang dia buat. Jangan takut punya pendapat sendiri, berkata tidak, atau pergi dari hal-hal yang tidak sejalan dengan siapa dirimu.

        Hiduplah dengan tujuan. Beranilah. Disiplinlah. Berpendirianlah kuat, tapi jangan pernah menjadi keras hati. Berpikirlah cukup terbuka untuk belajar, cukup bijak untuk mengakui saat kamu salah, dan cukup kuat untuk terus melangkah saat keadaan tidak berpihak padamu.

        Aku tahu aku tidak selalu mudah dihadapi. Maaf untuk saat-saat ketika amarahku atau caraku bereaksi mungkin telah menyakitimu atau membangkitkan lagi hal-hal yang tidak seharusnya kamu pikul lagi. Aku tidak ingin menjadi sumber luka lagi dalam hidupmu. Aku ingin kita tumbuh, bukan saling menghancurkan.

        Aku tidak berharap kamu menjadi sempurna. Aku hanya ingin melihatmu menjadi versi dirimu yang lebih baik—lebih punya tujuan, lebih percaya diri, lebih berani, lebih berbelas kasih, dan lebih yakin dengan pribadi yang ingin kamu tuju.

        Semoga kamu menjadi seseorang yang bisa berdiri tegak di atas kakinya sendiri, mengejar apa yang dia yakini, bekerja keras untuk apa yang dia inginkan, dan tetap baik serta penuh kasih di sepanjang jalan.

        Dan seberapapun aku kesulitan merangkai perasaanku menjadi kata-kata, ada satu hal yang aku tahu pasti:

        Aku mencintaimu lebih dari yang mungkin kamu sadari.

        Selamat ulang tahun, sayangku. Aku bangga dengan siapa dirimu sekarang, dan aku tidak sabar melihat laki-laki seperti apa dirimu kelak.
        TEXT,

    'greeting' => <<<'TEXT'
        Happy birthday, sweet boy.

        I hope your life will always be filled with happiness, genuine smiles, meaningful laughter, and people who truly appreciate you.

        I hope your patience will lead you to something worth winning, your pain will be replaced with happiness, and your consistency will build the life you deserve.

        As you grow older, I hope you become a man who knows exactly what he wants. A man who stands firmly on his principles, makes his own decisions, and has the courage to take responsibility for every choice he makes. Don’t be afraid to have your own opinion, to say no, or to walk away from things that don’t align with who you are.

        Be intentional. Be brave. Be disciplined. Be strong-minded, but never become hard-hearted. Be open-minded enough to learn, wise enough to admit when you’re wrong, and strong enough to keep going when things don’t go your way.

        I know I’m not always easy to deal with. I’m sorry for the times when my anger or the way I reacted may have hurt you or brought back things you never deserved to carry again. I don’t want to be another source of pain in your life. I want us to grow, not break each other.

        I don’t expect you to become perfect. I just want to see you become a better version of yourself—more intentional, more confident, more courageous, more compassionate, and more certain of the person you want to be.

        I hope you become someone who can stand firmly on his own feet, chase what he believes in, work hard for what he wants, and still remain kind and loving along the way.

        And no matter how much I struggle to put my feelings into words, there’s one thing I know for sure:

        I love you more than you probably realize.

        Happy birthday, my sweet boy. I’m proud of the person you are, and I’m excited to see the man you’re becoming.
        TEXT,

    'photos' => [
        [
            // Simpan sebagai public/assets/photo1.jpg (rasio 3:4, maks 500 KB).
            // Kosong = tampil placeholder "Foto 1" sampai file dipasang.
            'src' => 'assets/photo1.jpg',
            'title' => 'look how sweet u are',
            'date' => '24 Oktober 2026',
            'text' => "You're all that I want, you're all that I need.",
        ],
        [
            'src' => 'assets/photo2.jpg',
            'title' => 'u are my beautiful boooyy',
            'date' => '24 Oktober 2026',
            'text' => 'Once in your life you find someone who will turn your world around.',
        ],
        [
            'src' => 'assets/photo3.jpg',
            'title' => 'kecayangannkuuuu',
            'date' => '24 Oktober 2026          ',
            'text' => "Now our dreams are comin' true, through the good times and the bad.",
        ],
    ],

    'proud' => 'I am proud of you. For all the efforts you never spoke about, for every time you got back up, and for the person you are now.',

    'reasonsTitle' => 'The reason i like you ⸜(｡˃ ᵕ ˂ )⸝♡',

    'reasons' => [
        [
            't' => 'your effort',
            'p' => 'Never stop growing just because life gets difficult. Rest when you need to, learn from every setback, and keep moving forward. I hope you become someone who never gives up on the person you know you can be.',
        ],
        [
            't' => 'your heart',
            'p' => 'Never let the world make you forget the kindness within you. Keep your heart sincere, but learn to protect it with wisdom. I hope you grow into someone who cares deeply without losing themselves in the process.',
        ],
        [
            't' => 'your bravery',
            'p' => 'Have the courage to stand by your principles, even when the world makes it easier to compromise. Be humble enough to admit when you are wrong, yet strong enough not to abandon what you believe is right. I hope you become someone who stands firm without losing the courage to grow.jadik',
        ],
    ],

    'marquee' => 'LOVEE YOUU  ✦ ',

    'endTitle' => 'YOURE DOING YOUR BEST!',

    // Journey Kita — halaman /journey. Satu kartu kesimpulan + deskripsi tiap foto.
    // Ganti contoh di bawah dengan tulisanmu, tanpa menyentuh kode lain.
    'journeyTitle' => 'You and Memoies',

    // Satu kartu kesimpulan di bawah galeri foto.
    'journeyConclusion' => [
        't' => 'Something',
        'p' => 'Seriously the momen when i first time interaksi sama kamu i felt like...this boy lowkey attractive ya,
        and pernah diwaktu yang perasaan itu berputar terus dikepalaku but aku juga gatau kenapa, i wondering lalu aku merasa
        theres something special about him but idk what is it,terus aku biarin aja kan lalu ada lah waktu aku kepikiran mau main
        codm di laptop and iseng mintol kamu,dan yap thats how we started hehe,sehat selaluu yaa sayaangkuuuu ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧',
    ],

    // Foto-foto halaman Journey (disalin dari folder journey di Desktop).
    // Isi 'desc' tiap foto dengan deskripsimu — tampil saat foto diklik.
    'journeyPhotos' => [
        ['src' => 'assets/journey/journey01.jpg', 'desc' => 'aku ngoding ditemani  si kuninggg'],
        ['src' => 'assets/journey/journey02.jpg', 'desc' => 'aloooooowww raraaaa'],
        ['src' => 'assets/journey/journey03.jpg', 'desc' => 'kata kamu character ep ep ku mewing'],
        ['src' => 'assets/journey/journey04.jpg', 'desc' => 'aduhh aku kecipratan kuah pedess'],
        ['src' => 'assets/journey/journey05.jpg', 'desc' => 'aku suka filter inii imoppppppp'],
        ['src' => 'assets/journey/journey06.jpg', 'desc' => 'aku sebenernya juga ga ngerti kenapa kaki kamu begituu wkwkkwkwk ini lucu bgt'],
        ['src' => 'assets/journey/journey07.jpg', 'desc' => 'ini matchaaa tapi aku lupa ini kamu beli sendiri apa dari aku yahh '],
        ['src' => 'assets/journey/journey08.jpg', 'desc' => 'ini kamu coba coba filter wkwkwk lucuuu cekaliiii'],
        ['src' => 'assets/journey/journey09.jpg', 'desc' => 'ini nunjukin foto masa kecil kamu tapi kamu ilfeel soalnya kamu kaya sok eren mybee wkwkkwwk'],
        ['src' => 'assets/journey/journey10.jpg', 'desc' => 'ala ala UK DRIP  ga sih inii wkwkkwkw tapi kerenn sih'],
        ['src' => 'assets/journey/journey11.jpg', 'desc' => 'lah si wowook'],
        ['src' => 'assets/journey/journey12.jpg', 'desc' => 'aku suruh kamu tes mbti dan kamu dapet kepribadian INFP yang mana itu kepribadian orang yang lebih mengutamakan perasaan gituu CMIWW'],
        ['src' => 'assets/journey/journey13.jpg', 'desc' => 'lagi makan tiba tiba makan kamu tumpah wkwkwk kalo seingetku karna kamu kegigit semut wkwkkwkwkwkwk'],
        ['src' => 'assets/journey/journey14.jpg', 'desc' => 'kamu tak suruh ngerjain pedang pedangan terus kamu pap gek madang gitu katanya wkwkkwkwk'],
        ['src' => 'assets/journey/journey15.jpg', 'desc' => 'aku penge lihat make up buto kamu soale aku ga sekolah terus kamu kirimin ituuu yeyeyeyeyey'],
        ['src' => 'assets/journey/journey16.jpg', 'desc' => 'ini kamu kirim foto pedang yang udah jadi tapi aku malah ceklis 1 karna aku udah boboo heheheh'],
        ['src' => 'assets/journey/journey17.jpg', 'desc' => 'ini ala ala UK DRIP ver sudah dewasaa wkwkwkwk lucunyaa'],
        ['src' => 'assets/journey/journey18.jpg', 'desc' => 'ini kaya bocil bgt plcccc lucyuuuuuukk'],
    ],

    // Musik halaman Journey: file lokal (public/assets/enchanted1.mp3) atau
    // video resmi YouTube sebagai cadangan ('igIfiqqVHtA' = Taylor Swift – Enchanted).
    'enchanted' => 'assets/enchanted1.mp3',
    'enchantedYoutubeId' => 'igIfiqqVHtA',
    // Potongan lagu (detik): 0 = putar penuh berulang (file enchanted1.mp3
    // durasinya 4:09, jadi potongan lama 175-262 tidak cocok lagi).
    // Ubah angkanya kalau mau potongan tertentu, tanpa menyentuh kode lain.
    'enchantedStart' => 0,
    'enchantedEnd' => 0,

    /*
    |--------------------------------------------------------------------------
    | Landing — halaman info di route / (sebelum halaman birthday)
    |--------------------------------------------------------------------------
    |
    | Ubah teks di sini tanpa menyentuh file lain.
    |
    */

    'landing' => [
        'title' => 'Pemberitahuan',
        'heading' => 'Situs sempat mengalami error',
        'text' => 'Halaman ini sempat mengalami error, tapi sekarang sudah pulih. Masukkan sandi untuk lanjut.',
        'button' => 'Lanjutkan',
    ],

    /*
    |--------------------------------------------------------------------------
    | Gate — dua sandi sebelum masuk halaman utama
    |--------------------------------------------------------------------------
    |
    | Sandi 1 diminta di halaman info (/), sandi 2 di halaman berikutnya.
    | Atur BIRTHDAY_GATE_SANDI1 dan BIRTHDAY_GATE_SANDI2 di file .env.
    |
    */

    'gate' => [
        'sandi1' => env('BIRTHDAY_GATE_SANDI1', ''),
        'sandi2' => env('BIRTHDAY_GATE_SANDI2', ''),
        'second' => [
            'title' => 'Sandi Kedua',
            'heading' => 'Satu sandi lagi',
            'text' => 'Sandi pertama benar. Masukkan sandi kedua untuk masuk ke halaman utama.',
            'button' => 'Masuk',
            'error' => 'Sandi salah, coba lagi.',
        ],
    ],

];
