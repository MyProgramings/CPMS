<?php
define('PAGINATION_COUNT', 20);

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\InventorisController;
use App\Http\Controllers\LiChDetController;
use App\Http\Controllers\ListCheckupController;
use App\Http\Controllers\PatGivingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PsyAsController;
use App\Http\Controllers\RCheckupController;
use App\Http\Controllers\RDefMedController;
use App\Http\Controllers\SocAsController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {
    // -------------------------users Controller---------------------------------------
    Route::get('/user/reports', [UserController::class, 'reports'])->name('user_reports');
    Route::get('/autocomplete-users', [UserController::class, 'autocompleteSearch']);
    Route::resource('users', UserController::class);
    // -------------------------Admin Controller---------------------------------------
    Route::get('/translate_to_ar', [AdminController::class, 'translate_to_ar'])->name('translate_to_ar');
    Route::get('/translate_to_en', [AdminController::class, 'translate_to_en'])->name('translate_to_en');
    Route::get('/backup', [AdminController::class, 'backup'])->name('backup');
    Route::get('/restored', [AdminController::class, 'create'])->name('create_restore');
    Route::get('/restore_s', [AdminController::class, 'restores'])->name('restore_s');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // -------------------------Patient Controller---------------------------------------
    Route::get('patient/{patient}', [PatientController::class, 'reports'])->name('reports');
    Route::get('/autocomplete-patients', [PatientController::class, 'autocompleteSearch']);
    Route::resource('patients', PatientController::class);
    //  -------------------------Appointment Controller----------------------------------
    Route::get('/autocomplete-appointments', [AppointmentController::class, 'autocompleteSearch']);
    Route::resource('appointments', AppointmentController::class);
    // ---------------------------Inventory Controller-----------------------------------
    Route::get('/autocomplate-inventory', [InventorisController::class, 'autocompleteSearch']);
    Route::resource('inventories', InventorisController::class);
    //---------------------------ListCheckup Controller---------------------------------
    Route::get('/autocomplete-list_checkups', [ListCheckupController::class, 'autocompleteSearch']);
    Route::resource('list_checkups', ListCheckupController::class);
    //---------------------------LiChDet Controller-------------------------------------
    Route::get('/autocomplete-li_ch_dets', [LiChDetController::class, 'autocompleteSearch']);
    Route::resource('li_ch_dets', LiChDetController::class);
    //---------------------------PsyAs Controller---------------------------------------
    Route::get('/psy_as/create/{id}', [PsyAsController::class, 'create_W_App'])->name('psy_as_create');
    Route::get('/autocomplete-psy_as', [PsyAsController::class, 'autocompleteSearch']);
    Route::resource('psy_ass', PsyAsController::class);
    //---------------------------SocAs Controller---------------------------------------
    Route::get('/soc_as/create/{id}', [SocAsController::class, 'create_W_App'])->name('soc_as_create');
    Route::get('/autocomplete-soc_as', [SocAsController::class, 'autocompleteSearch']);
    Route::resource('soc_ass', SocAsController::class);
    //---------------------------RCheckup Controller------------------------------------
    Route::get('/r_checkup/create/{id}', [RCheckupController::class, 'create_W_App'])->name('r_checkup_create');
    Route::get('/r_checkup/{id}', [RCheckupController::class, 'getli_ch_dets']);
    Route::get('/autocomplete-r_checkups', [RCheckupController::class, 'autocompleteSearch']);
    Route::resource('r_checkups', RCheckupController::class);
    //---------------------------RDefMed Controller-------------------------------------
    Route::get('/r_def_med/create/{id}', [RDefMedController::class, 'create_W_App'])->name('mediacnt_create');
    Route::get('/r_def_med/{id}', [RDefMedController::class, 'getMedicine']);
    Route::get('/autocomplete-r_def_meds', [RDefMedController::class, 'autocompleteSearch']);
    Route::resource('r_def_meds', RDefMedController::class);
    //---------------------------PatGiving Controller-----------------------------------
    Route::get('/autocomplete-pat_givings', [PatGivingController::class, 'autocompleteSearch']);
    Route::resource('pat_givings', PatGivingController::class);
});
