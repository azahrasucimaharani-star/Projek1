<?php

test('halaman journey tertutup tanpa dua sandi', function () {
    $this->get(route('journey'))->assertRedirect(route('landing'));

    $this->withSession(['gate' => ['tahap1' => true]])
        ->get(route('journey'))
        ->assertRedirect(route('gate.second'));
});

test('halaman journey tampil dengan foto, deskripsi, dan kesimpulan', function () {
    $response = $this->withSession(['gate' => ['tahap1' => true, 'tahap2' => true]])
        ->get(route('journey'));

    $response->assertOk();
    $response->assertSee('You and Memories', false);
    $response->assertSee('assets/journey/journey01.jpg', false);
    $response->assertSee('gtrack', false);
    $response->assertSee(e(config('birthday.journeyPhotos')[0]['desc']), false);
    $response->assertSee('class="kesimpulan"', false);
    $response->assertSee('id="bMusic"', false);
    $response->assertSee('igIfiqqVHtA', false);
    $response->assertSee((string) config('birthday.enchantedStart'), false);
    $response->assertSee((string) config('birthday.enchantedEnd'), false);
    $response->assertSee('assets/favicon-heart.png', false);
    $response->assertSee(route('birthday'), false);
});
