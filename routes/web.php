<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('shop');
});


// php artisan make:livewire Famille
// php artisan make:livewire Marque
// php artisan make:livewire Unite
// php artisan make:livewire Article
// php artisan make:livewire ModeReglement
// php artisan make:livewire Client
// php artisan make:livewire Reglement
// php artisan make:livewire Commande
// php artisan make:livewire DetailBl


// php artisan make:livewire Famille
// php artisan make:livewire Marque
// php artisan make:livewire Unite
// php artisan make:livewire Article
// php artisan make:livewire Reglement
// php artisan make:livewire Client
// php artisan make:livewire Commande
// php artisan make:livewire DetailBl
// php artisan make:livewire ModeReglement

// php artisan make:livewire FamilleList
// php artisan make:livewire MarqueList
// php artisan make:livewire UniteList
// php artisan make:livewire ArticleList
// php artisan make:livewire ClientList
// php artisan make:livewire CommandeList
// php artisan make:livewire ModeReglementList
