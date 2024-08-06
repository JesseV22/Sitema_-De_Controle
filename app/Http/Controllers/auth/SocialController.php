<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    /**
     * Redireciona o usuário para o provedor de autenticação.
     *
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Lida com o retorno do provedor de autenticação e realiza o login do usuário.
     *
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = $this->findOrCreateUser($socialUser, $provider);

        Auth::login($user, true);

        return redirect()->route('home');
    }

    /**
     * Encontra ou cria um usuário com base nos dados retornados pelo provedor de autenticação.
     *
     * @param \Laravel\Socialite\Contracts\User $socialUser
     * @param string $provider
     * @return \App\Models\User
     */
    public function findOrCreateUser($socialUser, $provider)
    {
        // Verifica se o usuário já existe com base no ID do provedor
        $user = User::where('provider_id', $socialUser->getId())->first();

        // Se o usuário já existe, retorna o usuário encontrado
        if ($user) {
            return $user;
        }

        // Caso contrário, cria um novo usuário
        return User::create([
            'name'         => $socialUser->getName(),
            'email'        => $socialUser->getEmail(),
            'provider'     => $provider,
            'provider_id'  => $socialUser->getId(),
        ]);
    }
}
