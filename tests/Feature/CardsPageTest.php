<?php

test('halaman cards menampilkan pengalaman kartu ulang tahun 3D', function () {
    $response = $this->get(route('cards'));

    $response->assertOk();
    $response->assertSee('<title>Happy Birthday, Sweet Boy</title>', false);
    $response->assertSee('id="cards-root"', false);
});
