<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\DocClientController;
use App\Http\Controllers\Payments\AsaasController;
use App\Http\Controllers\Payments\DepositoController;
use App\Http\Controllers\SiteController;
use App\Http\Livewire\Cartaopay;
use App\Http\Middleware\AuthClient;
use App\Http\Middleware\AuthClienteAtivado;
use App\Models\FilesModel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', [SiteController::class, 'index']);

Route::get('cadastro', [SiteController::class, 'cadastro']);

Route::get('cadastrar', [SiteController::class, 'cadastrar']);
Route::post('cadastrar', [SiteController::class, 'create_store']);

Route::get('login', [SiteController::class, 'login'])->name('login');
Route::post('login', [SiteController::class, 'login_client']);

Route::get('recupera_senha', [SiteController::class, 'recupera_senha'])->name('recupera_senha');
Route::post('recupera_senha', [SiteController::class, 'login_client'])->name('recupera_senha_post');

Route::get('adm', [AdmController::class, 'index']);
Route::post('adm', [AdmController::class, 'logar_adm']);

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::prefix('client')->middleware(['auth', AuthClient::class])
    ->group(function () {
        Route::get('/', [ClientController::class, 'index'])->name('client');

        Route::get('check', [ClientController::class, 'check']);

        Route::get('plan/select', [ClientController::class, 'plan_select']);
        Route::post('plan/select', [ClientController::class, 'plan_select_store']);

        Route::get('meu_plano', [ClientController::class, 'meu_plano']);
        Route::get('relatorio', [ClientController::class, 'relatorio']);

        Route::get('ativacao', [DocClientController::class, 'ativacao']);
        Route::post('ativacao', [DocClientController::class, 'ativacao_store']);

        Route::get('meus_dados', [ClientController::class, 'meus_dados']);

        Route::get('edit', [ClientController::class, 'edit']);
        Route::post('edit/store', [ClientController::class, 'edit_store']);

        Route::get('cpf', [ClientController::class, 'cpf']);
        Route::post('cpf', [ClientController::class, 'cpf_store']);

        Route::get('password', [ClientController::class, 'password']);
        Route::post('password/store', [ClientController::class, 'password_store']);

        Route::get('meus_pacotes', [ClientController::class, 'meus_pacotes']);

        Route::get('files', [ClientController::class, 'files']);
        Route::get('files/open/{id_file}', function ($id_file) {
            $file = FilesModel::find($id_file)->file;
            return Storage::response($file);
        });

        Route::get('saques/rendimento', [ClientController::class, 'saques_rendimento']);
        Route::get('saques/indicacao', [ClientController::class, 'saques_indicacao']);

        Route::prefix('/')->middleware(AuthClienteAtivado::class)->group(function () {
            Route::get('estrategia', [ClientController::class, 'estrategia2']);

            Route::get('tutorial', [ClientController::class, 'tutorial']);

            Route::get('saque/indicacao', [ClientController::class, 'saque_indicacao']);
            Route::post('saque/indicacao', [ClientController::class, 'saque_indicacao_store']);

            Route::get('saque/rendimento', [ClientController::class, 'saque_rendimento']);
            Route::post('saque/rendimento', [ClientController::class, 'saque_rendimento_store']);
        });

        Route::get('compras', [ClientController::class, 'compras']);
        Route::get('compra/info/{compra_id}', [ClientController::class, 'compra_info']);

        Route::get('ciclos', [ClientController::class, 'ciclos']);

        Route::get('ciclo/comprar/{ciclo_id_cript}', [ClientController::class, 'ciclo_comprar']);
        Route::post('ciclo/comprar/{ciclo_id_cript}', [ClientController::class, 'ciclo_comprar_store']);

        Route::get('ciclo/vender/{ciclo_id_cript}', [ClientController::class, 'ciclo_vender']);
        Route::post('ciclo/vender/{ciclo_id_cript}', [ClientController::class, 'ciclo_vender_store']);

        Route::get('faq', [ClientController::class, 'faq']);
        Route::get('about', [ClientController::class, 'about']);
        Route::get('termos_compra', [ClientController::class, 'termos_compra']);

        Route::get('logout', [ClientController::class, 'logout']);

        Route::get('depositos', [ClientController::class, 'depositos']);
        Route::get('depositar', [ClientController::class, 'depositar']);
        Route::post('depositar', [ClientController::class, 'depositar_post']);
        Route::get('depositar/meio/{deposit_id}', [ClientController::class, 'depositar_meio']);
        Route::post('depositar/meio/{deposit_id}', [ClientController::class, 'depositar_meio_post']);

        Route::prefix('asaas')->group(function () {
            Route::get('pix/create/{deposit_id_crypt}', [AsaasController::class, 'pix_create']);
            Route::get('pix/pay/{deposit_id_crypt}', [AsaasController::class, 'pix_pay']);
            Route::post('pix/consult', [AsaasController::class, 'consult']);

            Route::get('boleto/create/{deposit_id_crypt}', [AsaasController::class, 'boleto_create']);
            Route::get('boleto/pay/{deposit_id_crypt}', [AsaasController::class, 'boleto_pay']);

            Route::get('cartao/pay/{deposit_id_crypt}', Cartaopay::class);
        });

        // Route::prefix('gerencianet')->group(function () {
        //     Route::get('pix/create/{deposit_id_crypt}', [GerencianetController::class, 'pix_create']);
        //     Route::get('pix/pay/{deposit_id_crypt}', [GerencianetController::class, 'pix_pay']);
        //     Route::post('pix/consult', [GerencianetController::class, 'consult']);
        // });

        Route::prefix('deposit')->group(function () {
            Route::get('pay/{deposit_id_crypt}', [DepositoController::class, 'pay']);
            Route::post('pay/{deposit_id_crypt}', [DepositoController::class, 'pay_store']);
        });
    });


Route::get('migrate', function () {
    Artisan::call('migrate');
});

Route::get('view', function () {
    Artisan::call('view:clear');
});

Route::get('config', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
});
