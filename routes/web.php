<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use App\Models\Product;
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

    // Define the route to render the "products" view
    Route::get('/', [ProductController::class, 'index']);

    Route::get('/product/create', [ProductController::class, 'create']);

    Route::get('/product/{product}', [ProductController::class, 'show']);

    Route::post('/product', [ProductController::class, 'store']);

    Route::get('/products/{product}/edit', [ProductController::class, 'edit']);

    Route::put('/products/{product}', [ProductController::class, 'update']);
    
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);
    
    Route::get('/register', [UserController::class, 'create']);

    //save new user
    Route::post('/users', [UserController::class, 'store']);

    //logout
    Route::post('/logout', [UserController::class,'logout']);
    /*
    index - show all products
    show - show single product
    create - show form to create new product
    store - store new products
    edit - update product
    destroy - delete product
    */
?>