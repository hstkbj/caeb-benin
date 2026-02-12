<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',[UserController::class, 'login']);


//Donate
Route::post('/adddonate', [DonateController::class, 'store']);

Route::middleware('auth:sanctum')->group(function(){

    //CurrentUser
    Route::get('/user', [UserController::class, 'User']);
    //logout
    Route::post('/logout',[UserController::class, 'logout']);

    Route::post('/user/profile/change-password', [UserController::class, 'changePassword']);

    //User
    Route::get('/alluser',[UserController::class, 'index']);
    Route::get('/showuser/{id}',[UserController::class, 'show']);
    Route::post('/adduser',[UserController::class, 'store']);
    Route::put('/updateuser/{id}',[UserController::class, 'update']);
    Route::delete('/deleteuser/{id}',[UserController::class, 'destroy']);

    //roles
    Route::get('/roles', [RoleController::class, 'AllRoles']);
    Route::get('/role/{id}', [RoleController::class, 'show']);
    Route::post('/addrole', [RoleController::class, 'store']);
    Route::put('/updaterole/{id}', [RoleController::class, 'update']);
    Route::delete('/deleterole/{id}', [RoleController::class, 'destroy']);

    //category
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::post('/addcategory', [CategoryController::class, 'store']);
    Route::put('/udatecategory/{id}', [CategoryController::class, 'edite']);
    Route::delete('/deletecategory/{id}', [CategoryController::class, 'destroy']);

    //events
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{id}', [EventController::class, 'show']);
    Route::post('/addevents', [EventController::class, 'store']);
    Route::put('/udateevents/{id}', [EventController::class, 'update']);
    Route::delete('/deleteevents/{id}', [EventController::class, 'destroy']);

    //Contact
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::get('/contact/{id}', [ContactController::class, 'show']);
    Route::delete('/deletecontact/{id}', [ContactController::class, 'destroy']);

    //Blogs
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/{id}', [BlogController::class, 'show']);
    Route::post('/addblogs', [BlogController::class, 'store']);
    Route::put('/udateblogs/{id}', [BlogController::class, 'update']);
    Route::delete('/deleteblogs/{id}', [BlogController::class, 'destroy']);

    //Donate
    Route::get('/donates', [DonateController::class, 'index']);
    Route::get('/donates/{id}', [DonateController::class, 'show']);
    Route::delete('/deletedonates/{id}', [DonateController::class, 'destroy']);

});