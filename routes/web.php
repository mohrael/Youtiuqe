<?php
use App\Http\Middleware\IsAdmin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get("/",function(){
    return view('welcome');
});


Route::prefix('home')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/product/{id}', [HomeController::class, 'showProduct'])->name('showProduct');
    Route::get('/category/{id}', [HomeController::class, 'showCategory'])->name('showCategory');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/test-store', function () {
    dd('Store route works!');
});


Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //   Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    // Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    // Route::get('/admin/product', [AdminController::class, 'products'])->name('admin.products');

    // Route::get('/admin/product/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    // Route::post('/admin/product', [AdminController::class, 'storeProduct'])->name('admin.products.store');


    Route::get('/admin/products/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('products.store');

    // Route::get('/admin/product/edit',[ProductController::class,'edit'])->name('admin.products.edit');
    //  Route::get('/admin/product/delete',[ProductController::class,'delete'])->name('admin.products.delete');

});

require __DIR__.'/auth.php';


// Route::get("/articles", [ArticleController::class, 'allArticles']);
