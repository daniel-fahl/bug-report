<?php

test('next-request-shows-the-error', function () {
    $this->from('/form')->post('/form');

    $response = $this->get('/form');
    $response->assertSee('The name is invalid.');
});

test('next-request-shows-error-after-session-assertion', function () {
    $this->from('/form')->post('/form')->assertSessionHasErrors('name');

    $response = $this->get('/form');
    // this fails, it seems `assertSessionHasError` cleared the error bag?
    $response->assertSee('The name is invalid.');
});
