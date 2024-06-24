<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
// Route::get('/marwa', function () {
//     return view('test');
// });
route::get('/',[Frontpages::class,'home'])->name('home');
Route::get('lang/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'ar'])) {
        session(['locale' => $lang]);
    }
    return redirect()->back();
});
    });