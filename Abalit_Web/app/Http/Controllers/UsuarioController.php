<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use app\Models\Usuario;

class UsuarioController extends Controller
{
    public function Login($email, $password) {
        if ($this->validarCredenciales($email, $password)) {
            // Autenticación exitosa
            Redirect::route('inicio');
        } else {
            // Autenticación fallida
            echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
        }
    }

    private function validarCredenciales($email, $password)
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // El usuario se autenticó correctamente
            return true;
        } else {
            // Autenticación fallida
            return false;
        }
    }

    public function signup(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|unique:Usuario|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Crea un nuevo usuario en la base de datos
        $user = new Usuario;
        $user->nombre = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Redirige a una página de inicio de sesión o muestra un mensaje de éxito
        return redirect('/login')->with('success', '¡Registro exitoso! Por favor, inicia sesión.');
    }
}
