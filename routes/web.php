<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\JobController;
    use App\Models\Job;
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

    // Define the route to render the "jobs" view
    Route::get('/', [JobController::class, 'index']);

    Route::get('/job/create', [JobController::class, 'create']);

    Route::get('/job/{job}', [JobController::class, 'show']);

    Route::post('/job', [JobController::class, 'store']);

    Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

    Route::put('/jobs/{job}', [JobController::class, 'update']);
    
    Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
    /*
    index - show all jobs
    show - show single job
    create - show form to create new job
    store - store new jobs
    edit - update job
    destroy - delete job
    */
?>