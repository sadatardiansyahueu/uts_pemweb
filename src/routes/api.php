<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Book
    Route::apiResource('pembayarans', 'PembayaranApiController');
    // Book
    Route::apiResource('pembayarans', 'PembayaranApiController');
});
