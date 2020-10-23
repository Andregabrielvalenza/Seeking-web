<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/blog-article', [WebController::class, 'blogArticle'])->name('blog-article');
Route::get('/buy-single-credits', [WebController::class, 'buySinglecredits'])->name('buy-single-credits');
Route::get('/comingup', [WebController::class, 'Comingup'])->name('Comingup');
Route::get('/faq-help', [WebController::class, 'faqHelp'])->name('faq-help');
Route::get('/favorites', [WebController::class, 'favorites'])->name('favorites');
Route::get('/formulario-dos', [WebController::class, 'formularioDos'])->name('formulario-dos');
Route::get('/formulario-tres', [WebController::class, 'formularioTres'])->name('formulario-tres');
Route::get('/formulario-uno', [WebController::class, 'formularioUno'])->name('formulario-uno');
Route::get('/get-luckybest-matches', [WebController::class, 'getluckybestMatches'])->name('get-luckybest-matches');
Route::get('/go-on-photofeed', [WebController::class, 'goonPhotofeed'])->name('go-on-photofeed');
Route::get('/go-premium-super-premium-hombres', [WebController::class, 'Gopremiumsuperpremiumhombres'])->name('Go-premium-super-premium-hombres');
Route::get('/go-premium-superpremium-mujeres', [WebController::class, 'Gopremiumsuperpremiummujeres'])->name('Go-premium-superpremium-mujeres');
Route::get('/how-it-works', [WebController::class, 'howitworks'])->name('how-it-works');
Route::get('/inbox', [WebController::class, 'inbox'])->name('inbox');
Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/privacy', [WebController::class, 'privacy'])->name('privacy');
Route::get('/settings', [WebController::class, 'settings'])->name('settings');
Route::get('/terms-and-conditions', [WebController::class, 'termsandconditions'])->name('terms-and-conditions');
Route::get('/user-profile-edit', [WebController::class, 'userprofileedit'])->name('user-profile-edit');
Route::get('/user-profile', [WebController::class, 'userprofile'])->name('user-profile');
Route::get('/validate-use', [WebController::class, 'validateuse'])->name('validate-use');

