<?php

beforeEach(function () {
    config([
        'birthday.gate.sandi1' => 'test-first-password',
        'birthday.gate.sandi2' => 'test-second-password',
    ]);
});

test('sandi pertama belum dikonfigurasi menolak akses kosong', function () {
    config(['birthday.gate.sandi1' => '']);

    $this->post(route('landing.periksa'), ['sandi' => ''])
        ->assertRedirect()
        ->assertSessionHasErrors('sandi');

    expect(session('gate.tahap1'))->toBeNull();
});

test('sandi kedua belum dikonfigurasi menolak akses kosong', function () {
    config(['birthday.gate.sandi2' => '']);

    $this->withSession(['gate' => ['tahap1' => true]])
        ->post(route('gate.second.periksa'), ['sandi' => ''])
        ->assertRedirect()
        ->assertSessionHasErrors('sandi');

    expect(session('gate.tahap2'))->toBeNull();
});

test('halaman info tampil dengan form sandi pertama', function () {
    $response = $this->get(route('landing'));

    $response->assertOk();
    $response->assertSee('Lanjutkan', false);
    $response->assertSee(route('landing.periksa'), false);
});

test('sandi pertama salah tidak bisa lanjut', function () {
    $response = $this->post(route('landing.periksa'), ['sandi' => 'salah']);

    $response->assertRedirect();
    $response->assertSessionHasErrors('sandi');
    expect(session('gate.tahap1'))->toBeNull();
});

test('sandi pertama benar lanjut ke halaman sandi kedua', function () {
    $sandi1 = config('birthday.gate.sandi1');

    $response = $this->post(route('landing.periksa'), ['sandi' => $sandi1]);

    $response->assertRedirect(route('gate.second'));
    expect(session('gate.tahap1'))->toBeTrue();
});

test('halaman sandi kedua tertutup tanpa sandi pertama', function () {
    $response = $this->get(route('gate.second'));

    $response->assertRedirect(route('landing'));
});

test('sandi kedua salah tidak bisa masuk halaman utama', function () {
    $response = $this->withSession(['gate' => ['tahap1' => true]])
        ->post(route('gate.second.periksa'), ['sandi' => 'salah']);

    $response->assertRedirect();
    $response->assertSessionHasErrors('sandi');
    expect(session('gate.tahap2'))->toBeNull();
});

test('sandi kedua benar masuk ke halaman utama', function () {
    $sandi2 = config('birthday.gate.sandi2');

    $response = $this->withSession(['gate' => ['tahap1' => true]])
        ->post(route('gate.second.periksa'), ['sandi' => $sandi2]);

    $response->assertRedirect(route('birthday'));
    expect(session('gate.tahap2'))->toBeTrue();
});

test('halaman utama tertutup tanpa dua sandi', function () {
    $this->get(route('birthday'))->assertRedirect(route('landing'));

    $this->withSession(['gate' => ['tahap1' => true]])
        ->get(route('birthday'))
        ->assertRedirect(route('gate.second'));
});
