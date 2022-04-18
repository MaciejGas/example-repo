<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\PDFController;

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


// Route group for website

Route::get('/', [WebController::class, 'index']);

// Route group for client panel
Route::get('client/home', [App\Http\Controllers\HomeController::class, 'clientHome'])->name('client.home');

Route::get('/c_message', [MessageController::class, 'client_messages']);
Route::get('/c_message/{id}', [MessageController::class, 'client_messages_details']);
Route::post('/c_message_create', [MessageController::class, 'create']);

Route::get('/c_order', function () {
    return view('c_panel.order');
});
Route::post('/order_create', [OrderController::class, 'create']);


// Route group for admin panel 

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/a_messages', [MessageController::class, 'index'])->middleware('is_admin');
Route::get('/a_answer_create/{id}', [MessageController::class, 'create_answer']);
Route::post('/admin_answer', [MessageController::class, 'admin_answer']);


Route::get('/a_orders', [OrderController::class, 'index']);
Route::get('/a_orders/{id}', [OrderController::class, 'get_single']);
Route::get('/a_orders_edit/{id}', [OrderController::class, 'edit']);
Route::post('/a_orders_confirm', [OrderController::class, 'confirm']);
Route::get('/a_orders/delete/{id}', [OrderController::class, 'delete']);


Route::get('/a_clients', [UserController::class, 'index']);
Route::get('/a_clients/{id}', [UserController::class, 'edit_single']);
Route::post('/a_clients_edit', [UserController::class, 'edit']);
Route::get('/a_clients_archive/{id}', [UserController::class, 'archive']);

Route::get('/a_plans', [EventController::class, 'index']);
Route::get('/a_plans/add', [EventController::class, 'add']);
Route::post('/a_plans_create', [EventController::class, 'create']);
Route::get('/a_plans/delete/{id}', [EventController::class, 'delete']);
Route::get('/a_plans/edit/{id}', [EventController::class, 'edit']);
Route::post('/a_plans_update', [EventController::class, 'update']);


Route::get('/a_accessories', [AccessoryController::class, 'index']);
Route::post('/a_accessories_update', [AccessoryController::class, 'update']);

Route::post('/a_content_update', [WebController::class, 'update']);


Route::post('/generate-pdf', [PDFController::class, 'generatePDF']);


// Routes group fer Calendar 

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);


// Routes group for Auth

Auth::routes();

