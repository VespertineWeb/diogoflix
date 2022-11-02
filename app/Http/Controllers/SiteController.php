<?php

namespace App\Http\Controllers;

use App\Models\ClientsModel;
use App\Models\PlaylistsModel;
use App\Models\UsersModel;
use App\Models\VideosModel;
use App\Src\Plans\PlanClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller {

    private $data = [];

    public function index() {
        $playlists = PlaylistsModel::with('videos_youtube_id')->get();
        $videos = VideosModel::inRandomOrder()->get();

        return view('site.home_site', compact('playlists', 'videos'));
    }

    public function playlist($id) {
        $playlist = PlaylistsModel::with('videos_youtube_id')->find($id);
        return view('site.playlist_site', compact('playlist'));
    }

    public function cadastro() {
        return redirect('cadastrar');
    }

    public function login(Request $request) {
        return view('site.login');
    }

    public function login_client(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = UsersModel::where('email', $request->email)->first();
            if ($user->type != 'client') {
                auth()->logout();
            }
            $request->session()->regenerate();
            return redirect('client');
        }
        return redirect()->back()->with('alert', 'Dados Incorretos!');
    }

    public function cadastrar(Request $request) {
        return view('site.cadastrar', $this->data);
    }

    public function create_store(Request $request, ClientsModel $clients, $patrocinador = '') {
        $id_indicado = 1;
        $request->validate(
            [
                'name' => 'required',
                'user' => 'required|unique:App\Models\UsersModel,user|alpha_dash',
                'email' => 'required|email|unique:App\Models\UsersModel,email',
                'cpf' => 'required|unique:App\Models\UsersModel,cpf|cpfValida',
                'password' => 'required',
            ],
            [
                'email.unique' => 'Este E-mail já está cadastrado.',
                'user.unique' => 'Este Usuário já está cadastrado.',
                'cpf.unique' => 'Este CPF já está cadastrado.',
                'alpha_dash' => 'O Nome para Reflink deve conter apenas letras, números.',
                'cpf_valida' => 'CPF Inválido.',
            ]
        );
        $password = Hash::make($request->password);

        $insert = [
            'sponsor' => $id_indicado,
            'name' => $request->name,
            'email' => $request->email,
            'user' => $request->user,
            'password' => $password,
            'cpf' => $request->cpf,
            'cell' => $request->phone,
        ];
        UsersModel::create($insert);

        return redirect('/')->with('alert', 'Cadastro Concluído com Sucesso');
    }

    public function recupera_senha() {
        return view('site.recupera_senha');
    }

    public function cliente_painel() {
        return view('site.cliente_painel');
    }
}
