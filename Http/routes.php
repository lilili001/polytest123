<?php

Route::group(['middleware' => 'web', 'prefix' => 'polytest123', 'namespace' => 'MyehModules\PolyTest123\Http\Controllers'], function()
{
    Route::get('/', 'PolyTest123Controller@index');
});
