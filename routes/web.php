<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/', [AdminController::class, 'home']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/home', [AdminController::class, 'index']);

route::get('/create_room', [AdminController::class, 'create_room']);

route::post('/add_room', [AdminController::class, 'add_room']);

route::get('/view_room', [AdminController::class, 'view_room']);

route::get('/room_delete/{id}', [AdminController::class, 'room_delete']);

route::get('/room_update/{id}', [AdminController::class, 'room_update']);

route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);

route::get('/room_details/{id}', [HomeController::class, 'room_details']);

route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

route::get('/bookings', [AdminController::class, 'bookings']);

route::get('/booking_delete/{id}', [AdminController::class, 'booking_delete']);

route::get('/approve_book/{id}', [AdminController::class, 'approve_book']);

route::get('/rejected_book/{id}', [AdminController::class, 'rejected_book']);

route::get('/view_gallary', [AdminController::class, 'view_gallary']);

route::post('/uplaod_gallary', [AdminController::class, 'uplaod_gallary']);

route::get('/delete_gallary/{id}', [AdminController::class, 'delete_gallary']);

route::post('/contact', [HomeController::class, 'contact']);

route::get('/all_message', [AdminController::class,'all_message']);

route::get('/send_mail/{id}', [AdminController::class,'send_mail']);

route::post('/mail', [AdminController::class, 'mail']);
