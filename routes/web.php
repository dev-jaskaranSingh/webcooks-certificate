<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/{studentID}', [StudentDataController::class,'verifyStudent'])->name('admin.student.verify');
Route::post('/student/by-certificate', [StudentDataController::class,'verifyStudentByCertificateID'])->name('admin.student.verify.by-certificate');
Route::get('/student/certificate', [StudentDataController::class,'verifyStudentCertificate'])->name('admin.student.certificate.verify');

Route::group(['prefix' => 'admin'],function(){
    
    Route::get('login', [StudentDataController::class,'loginView'])->name('admin.login');
    Route::post('login', [StudentDataController::class,'Login'])->name('admin.attempt.login');
    
    Route::group(['middleware' => ['protectPage']], function () {
    
        Route::group(['prefix' => 'certificate'], function () {
            Route::get('create', [StudentDataController::class,'FormSubmit'])->name('admin.dashboard');
            Route::post('save', [StudentDataController::class,'Insert'])->name('admin.save.form');
            Route::get('list', [StudentDataController::class,'showData'])->name('admin.certificate.list');
            Route::get('image', [StudentDataController::class,'CertificateView']);
            Route::get('edit/{certificate}', [StudentDataController::class,'editCertificate'])->name('admin.edit.certificate');
            Route::get('delete/{certificate}', [StudentDataController::class,'deleteCertificate'])->name('admin.delete.certificate');
            Route::post('update', [StudentDataController::class,'updateCertificate'])->name('admin.update.form');
        });
    
        Route::get('image/{student_id}', [StudentDataController::class,'viewCertificate'])->name('admin.certificate.view');
        Route::get('print/certificate/{student_id}', [StudentDataController::class,'printCertificate'])->name('admin.certificate.print');
    });
    
    Route::get('logout', [StudentDataController::class,'Userlogout'])->name('admin.logout');
    
});
