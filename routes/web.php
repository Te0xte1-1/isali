<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Admin\Home_Controller::class, 'index'])->name('Home');
Route::get('sign_up', [App\Http\Controllers\User\user_controller::class, 'sign_up'])->name('Sign_up');
Route::post('sign_up/store', [App\Http\Controllers\User\user_controller::class, 'sign_up_store'])->name('Sign_up_store');
Route::get('login', [App\Http\Controllers\Admin\Home_Controller::class, 'index'])->name('login');
Route::post('login/store', [App\Http\Controllers\Admin\Home_Controller::class, 'login_store'])->name('Login.store');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('Dashboard', [App\Http\Controllers\Admin\Home_Controller::class, 'Dashboard'])->name('Dashboard');
    Route::post('logout', [App\Http\Controllers\Admin\Home_Controller::class, 'logout'])->name('Logout');

    // Print
    Route::get('Print_Motalaba', [App\Http\Controllers\Admin\Print_Motalaba_Controller::class, 'index'])->name('Print_Motalaba');

    /*   ═══════ ೋღ  Start query  ღೋ ═══════                */
    Route::get('query', [App\Http\Controllers\Admin\Isal_Controller::class, 'query'])->name('Query');
    Route::post('query/store', [App\Http\Controllers\Admin\Isal_Controller::class, 'query_store'])->name('Query.Store');
    Route::post('query/detailse', [App\Http\Controllers\Admin\Isal_Controller::class, 'query_detailse'])->name('Query.detailse');
    /*   ═══════ ೋღ  End query  ღೋ ═══════                */


    /*   ═══════ ೋღ  Start Admins  ღೋ ═══════                */
    Route::get('Admins', [App\Http\Controllers\Admin\admin_controller::class, 'index'])->name('Admins');
    Route::get('Admins/create', [App\Http\Controllers\Admin\admin_controller::class, 'create'])->name('Admins.create');
    Route::post('Admins/create/store', [App\Http\Controllers\Admin\admin_controller::class, 'store'])->name('Admins.create.store');
    Route::get('Admins/edit', [App\Http\Controllers\Admin\admin_controller::class, 'edit']);
    Route::get('Admins/update', [App\Http\Controllers\Admin\admin_controller::class, 'update']);
    Route::get('Admins/delete', [App\Http\Controllers\Admin\admin_controller::class, 'delete']);
    /*   ═══════ ೋღ  End Admins  ღೋ ═══════                */




    /*   ═══════ ೋღ  Start isal  ღೋ ═══════                */

    Route::get('isal/all', [App\Http\Controllers\Admin\Isal_Controller::class, 'index'])->name('Isal');
    Route::get('isal/create', [App\Http\Controllers\Admin\Isal_Controller::class, 'create'])->name('Isal.create');
    Route::post('isal/create/store', [App\Http\Controllers\Admin\Isal_Controller::class, 'store'])->name('Isal.store');
    Route::post('isal/all_show', [App\Http\Controllers\Admin\Isal_Controller::class, 'all_show'])->name('Isal.all_show');
    Route::post('isal/Print_show_isall_all', [App\Http\Controllers\Admin\Isal_Controller::class, 'Print_show_isall_all'])->name('Print_show_isall_all');
    Route::post('isal/Cancel_Isal', [App\Http\Controllers\Admin\Isal_Controller::class, 'Cancel_Isal'])->name('Isal.Ajax.Cancel_Isal');
    Route::post('isal/Cancel_Isal_Store', [App\Http\Controllers\Admin\Isal_Controller::class, 'Cancel_Isal_Store'])->name('Isal.Ajax.Cancel_Isal.Store');
    Route::get('isal/edit/{id}', [App\Http\Controllers\Admin\Isal_Controller::class, 'edit'])->name('Isal.edit');
    Route::get('isal/update', [App\Http\Controllers\Admin\Isal_Controller::class, 'update'])->name('Isal.update');
    Route::get('isal/delete', [App\Http\Controllers\Admin\Isal_Controller::class, 'delete'])->name('Isal.delete');
    Route::get('isal/67', [App\Http\Controllers\Admin\Isal_Controller::class, 'isal_67'])->name('isal_67');
    /*   ═══════ ೋღ  End isal  ღೋ ═══════                */




    // /*   ═══════ ೋღ  Start isal Proccess ღೋ ═══════                */
    Route::get('isal/archived/all', [App\Http\Controllers\Admin\Archived_Isals::class, 'index'])->name('Isal.Archived');
    Route::get('isal/extracted/all', [App\Http\Controllers\Admin\Extracted_Isals::class, 'index'])->name('Isal.Extracted');
    Route::get('isal/extracted/print/{id}', [App\Http\Controllers\Admin\Extracted_Isals::class, 'print'])->name('Isal.Extracted.Print');
    Route::get('isal/in_proccess/all', [App\Http\Controllers\Admin\In_Proccess_Isals::class, 'index'])->name('Isal.In_Proccess');
    Route::post('isal/in_proccess/convert_proccess_to_approve', [App\Http\Controllers\Admin\In_Proccess_Isals::class, 'convert_proccess_to_approve'])->name('Isal.convert_proccess_to_approve');
    Route::get('isal/rejected/all', [App\Http\Controllers\Admin\Rejected_Isals::class, 'index'])->name('Isal.Rejected');
    Route::get('isal/order_to_cancel/all', [App\Http\Controllers\Admin\Cancel_Isal::class, 'index'])->name('Isal.Cancel');
    /*   ═══════ ೋღ  End isal Process  ღೋ ═══════                */



    /*   ═══════ ೋღ  Start Units  ღೋ ═══════                */
    Route::get('units', [App\Http\Controllers\Admin\Units_Controller::class, 'index'])->name('Units');
    Route::get('Units/create', [App\Http\Controllers\Admin\Units_Controller::class, 'create'])->name('Units.create');
    Route::post('Units/create/store', [App\Http\Controllers\Admin\Units_Controller::class, 'store'])->name('Units.create.store');
    Route::post('units/edit', [App\Http\Controllers\Admin\Units_Controller::class, 'edit'])->name('Units.Ajax.Edit');
    Route::post('units/update', [App\Http\Controllers\Admin\Units_Controller::class, 'update'])->name('Units.update');
    Route::post('units/delete', [App\Http\Controllers\Admin\Units_Controller::class, 'delete'])->name('Units.Ajax.Delete');
    /*   ═══════ ೋღ  End Units  ღೋ ═══════                */


    /*   ═══════ ೋღ  Start services  ღೋ ═══════                */
    Route::get('services', [App\Http\Controllers\Admin\Services_Controller::class, 'index'])->name('Services');
    Route::get('services/create', [App\Http\Controllers\Admin\Services_Controller::class, 'create'])->name('Services.create');
    Route::post('services/create/store', [App\Http\Controllers\Admin\Services_Controller::class, 'store'])->name('Services.create.store');
    Route::post('services/get_service_price', [App\Http\Controllers\Admin\Services_Controller::class, 'get_service_price'])->name('get_service_price');
    Route::post('services/edit', [App\Http\Controllers\Admin\Services_Controller::class, 'edit'])->name('Service.Ajax.Edit');
    Route::post('services/update', [App\Http\Controllers\Admin\Services_Controller::class, 'update'])->name('Service.update');
    Route::post('services/delete', [App\Http\Controllers\Admin\Services_Controller::class, 'delete'])->name('Service.Ajax.Delete');
    /*   ═══════ ೋღ  End services  ღೋ ═══════                */



    /*   ═══════ ೋღ  Start Reports  ღೋ ═══════                */
    Route::get('Reports', [App\Http\Controllers\Admin\Reports_Controller::class, 'index'])->name('Reports');
    Route::post('Reports/store', [App\Http\Controllers\Admin\Reports_Controller::class, 'store'])->name('Report.store');
    Route::get('Reports/full_result_research', [App\Http\Controllers\Admin\Reports_Controller::class, 'full_result_research'])->name('Report.full_result_research');
    /*   ═══════ ೋღ  End Users  ღೋ ═══════                */


    /*   ═══════ ೋღ  Start Settings  ღೋ ═══════                */
    Route::get('Settings', [App\Http\Controllers\Admin\Settings_Controller::class, 'index'])->name('Settings');
    Route::get('Settings/create', [App\Http\Controllers\Admin\Settings_Controller::class, 'create'])->name('Settings.create');
    Route::post('Settings/create/store', [App\Http\Controllers\Admin\Settings_Controller::class, 'store'])->name('Settings.create.store');
    Route::get('Settings/edit/{id}', [App\Http\Controllers\Admin\Settings_Controller::class, 'edit'])->name('Settings.edit');
    Route::post('Settings/update', [App\Http\Controllers\Admin\Settings_Controller::class, 'update'])->name('Settings.update');
    Route::get('Settings/delete', [App\Http\Controllers\Admin\Settings_Controller::class, 'delete']);
    /*   ═══════ ೋღ  End Settings  ღೋ ═══════                */


    /*   ═══════ ೋღ  Start Users  ღೋ ═══════                */
    Route::get('Users/', [App\Http\Controllers\Admin\Users_Controller::class, 'index'])->name('Users');
    Route::get('Users/create', [App\Http\Controllers\Admin\Users_Controller::class, 'create'])->name('Users.create');
    Route::post('Users/create/store', [App\Http\Controllers\Admin\Users_Controller::class, 'store'])->name('Users.create.store');
    Route::get('Users/edit/{id}', [App\Http\Controllers\Admin\Users_Controller::class, 'edit'])->name('Users.edit');
    Route::post('Users/update', [App\Http\Controllers\Admin\Users_Controller::class, 'update'])->name('Users.update');
    Route::get('Users/delete', [App\Http\Controllers\Admin\Users_Controller::class, 'delete']);
    /*   ═══════ ೋღ  End Users  ღೋ ═══════                */

});