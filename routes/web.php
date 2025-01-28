<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home');

        Route::get('category/{slug}','category')
            ->where('slug','[a-z]+')->name('category.show');

        Route::get('company/{id}', 'company')
            ->where('id', '[0-9]+')->name('company.show');

        Route::get('work/{id}','work')
            ->where('id','[0-9]+')->name('work.show');
    });
