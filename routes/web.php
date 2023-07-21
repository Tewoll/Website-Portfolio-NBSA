<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DetailArtikelTagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\KategoriPortfolioController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\App;

Route::get('locale/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
        abort(400);
    }

    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::resource('/', HomeController::class);

Route::resource('/about', AboutController::class);

Route::resource('/project', ProjectController::class);
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('lihat');
Route::get('/project/kategori/{kategorinya:slug_portfolio}', [ProjectController::class, 'cariKategori'])->name('kategorinya');

Route::resource('/news', NewsController::class);
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('show');
Route::get('/news/category/{ktgrnya:slug}', [NewsController::class, 'carikategori'])->name('ktgrnya');
Route::get('/news/tag/{tagnya:slug}', [NewsController::class, 'caritag'])->name('tagnya');

Route::get('/contact', function () {
    return view('home/contact');
});

Route::get('/privacy-policy', function () {
    return view('home/privacy-policy');
});

Route::get('/belakang', function () {
    return view('dashboard.belakang');
})->middleware(['auth'])->name('dashboard.belakang');

// Artikel
Route::middleware(['auth:sanctum', 'verified'])->resource('kategori', KategoriController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('tag', TagController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('artikel', ArtikelController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('detail-artikel-tag', DetailArtikelTagController::class);

// Portfolio
Route::middleware(['auth:sanctum', 'verified'])->resource('kategori-portfolio', KategoriPortfolioController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('portfolio', PortfolioController::class);

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Route::get('/linkstorage', function () { $targetFolder = base_path().'/storage/app/public'; $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage'; symlink($targetFolder, $linkFolder); });

Route::middleware(['auth:sanctum', 'verified'])->resource('gallery', ImageUploadController::class);


Route::get('/{locale}/form', function ($locale) {
    App::setLocale($locale);
    return view('test');
});

require __DIR__ . '/auth.php';
