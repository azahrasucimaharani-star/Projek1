<?php

test('halaman utama birthday tampil sebagai satu halaman F1-F10', function () {
    $response = $this->withSession(['gate' => ['tahap1' => true, 'tahap2' => true]])->get(route('birthday'));

    $response->assertOk();
    $response->assertSee('Happy', false);
    $response->assertSee('Birthday', false);
    $response->assertSee('for my dear', false);
    $response->assertSee('id="proud"', false);
    $response->assertSee('id="rs"', false);
    $response->assertSee('id="slide"', false);
    $response->assertSee('id="bMusic"', false);
    $response->assertSee('id="chipBtn"', false);
    $response->assertSee('Translate', false);
    $response->assertSee('You and Memories', false);
    $response->assertSee(route('journey'), false);
    expect($response->getContent())->not->toContain('Baca ucapanku');
    $response->assertSee('<meta name="robots" content="noindex">', false);
});

test('tidak ada placeholder kurung siku yang tersisa', function () {
    $response = $this->withSession(['gate' => ['tahap1' => true, 'tahap2' => true]])->get(route('birthday'));

    $response->assertOk();
    expect($response->getContent())->not->toContain('[...]');
});
