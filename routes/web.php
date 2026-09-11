<?php
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AuthContrller;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () {

});

Route::post('/new_user', [PatientController::class, 'store'])->name('new_user.post');
Route::get('/new_user', [PatientController::class, 'create'])->name('new_user.create');

Route::get('/login', [AuthContrller::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthContrller::class, 'login'])->name('login.post');


// dashboard route
// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->name('dashboard');
Route::prefix('/dashboard/user')->name('user.')->group(function () {
    Route::get('/user', function () {
        return view('user.dashboard');})->name('index');
    Route::get('/operations', function () {
        return view('user.operations');}) ->name('operations');
    Route::get('/emergency', function () {
         return view('user.emergency');})->name('emergency');
    Route::get('/clinics', function () {
         return view('user.clinics');})->name('clinics');
    Route::get('/pharmacy', function () {
       return view('user.pharmacy');})->name('pharmacy');

});


Route::prefix('/dashboard')->name('admin.')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');})->name('index');
    Route::get('/operations', function () {
        return view('admin.operations');}) ->name('operations');
    Route::get('/emergency', function () {
         return '<h1> تصحبكم السلامة</h1>';})->name('emergency');
    Route::get('/clinics', function () {
         return view('admin.clinics');})->name('clinics');
    Route::get('/pharmacy', function () {
       return view('admin.pharmacy');})->name('pharmacy');

});
