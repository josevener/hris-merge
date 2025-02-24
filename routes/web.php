<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';
=======
    return view('welcome');
});
>>>>>>> 1cc7961a0275a520ace0f4cb4b128714a70e7e6f
