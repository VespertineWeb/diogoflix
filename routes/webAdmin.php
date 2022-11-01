<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BoletosController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\FilesController;
use App\Http\Controllers\Admin\ParametersController;
use App\Http\Controllers\Admin\PaymentsController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\PlaylistsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Middleware\AuthAdmin;
use App\Models\BoletosModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::prefix('admin')->middleware(AuthAdmin::class)->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('logout', [AdminController::class, 'logout']);

        Route::get('clients/plan/select/{id_cliente}', [ClientsController::class, 'plan_select']);
        Route::post('clients/plan/select/{id_cliente}', [ClientsController::class, 'plan_select_post']);
        Route::post('clients/search', [ClientsController::class, 'search'])->name('clients.search');
        Route::get('clients/home/{id_cliente}', [ClientsController::class, 'home']);
        Route::get('clients/extract/{id_cliente}', [ClientsController::class, 'extract']);
        Route::get('clients/pdf', [ClientsController::class, 'pdf']);
        Route::resource('clients', ClientsController::class);

        Route::resource('users', UsersController::class);
        Route::post('users/search', [UsersController::class, 'search'])->name('users.search');

        Route::resource('parameters', ParametersController::class);
        Route::post('parameters/search', [ParametersController::class, 'search'])->name('parameters.search');

        Route::resource('notifications', NotificationsController::class);
        Route::post('notifications/search', [NotificationsController::class, 'search'])->name('notifications.search');

        Route::resource('files', FilesController::class);
        Route::post('files/search', [FilesController::class, 'search'])->name('files.search');

        // Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
        Route::get('/laravel', function () {
            return view('welcome');
        });

        Route::get('boletos/download/{boleto_id}', function ($id_file) {
            $file = BoletosModel::find($id_file)->ticket;
            return Storage::response('comprovantes/' . $file);
        });
        Route::get('boletos/pdf', [BoletosController::class, 'pdf']);
        Route::get('boletos/pendentes', [BoletosController::class, 'pendentes']);
        Route::get('boletos/confirm/{boleto_id}', [BoletosController::class, 'confirm']);
        Route::post('boletos/confirm/{boleto_id}', [BoletosController::class, 'confirm_store']);
        Route::resource('boletos', BoletosController::class);
        Route::post('boletos/search', [BoletosController::class, 'search'])->name('boletos.search');

        Route::resource('compras', ComprasController::class);
        Route::post('compras/search', [ComprasController::class, 'search'])->name('compras.search');

        Route::resource('faqs', FaqsController::class);
        Route::post('faqs/search', [FaqsController::class, 'search'])->name('faqs.search');

        Route::resource('payments', PaymentsController::class);

        Route::get('plans/status', [PlansController::class, 'status']);
        Route::resource('plans', PlansController::class);

        Route::resource('playlists', PlaylistsController::class);

        Route::get('videos/import', [VideosController::class, 'import']);
        Route::resource('videos', VideosController::class);
    });
});
