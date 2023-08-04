<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Redireccionar al usuario después de iniciar sesión
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Personalizar el campo para el nombre de usuario (puedes usar el email o el campo que desees)
    public function username()
    {
        return 'email';
    }

    // Personalizar el mensaje de error al autenticar
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => 'Credenciales inválidas. Por favor, verifica tus datos.',
            ]);
    }
}
