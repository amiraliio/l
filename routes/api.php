<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/{token}/webhook',  function ($token) {
    dd('sdcscd');
    $update = \Telegram::bot($token)->getWebhookUpdates();
    dd($update);
});
