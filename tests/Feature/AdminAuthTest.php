<?php

test('login page can be rendered', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
    $response->assertSee('Welcome back');
});

test('admin dashboard can be rendered', function () {
    $response = $this->get('/admin');

    $response->assertStatus(200);
    $response->assertSee('Dashboard');
    $response->assertSee('Total Inquiries');
});
