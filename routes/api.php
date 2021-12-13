<?php

use App\Models\User;
use Database\Factories\ContentFactory;
use Illuminate\Support\Facades\Route;


Route::get('users', function () {
    return User::query()->inRandomOrder()
        ->limit(request('count') ?? DEFAULT_API_USER_COUNT)->get();
});

Route::get('user/{user}', function (User $user) {
    return $user;
});

Route::get('user', function () {
    return User::randomUser();
});

Route::get('content', function () {
    return (new ContentFactory())->definition()['content'];
});
