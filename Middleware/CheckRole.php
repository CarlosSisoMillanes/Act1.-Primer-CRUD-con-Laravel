<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $selectedRole = $request->input('role');

        if (auth()->check()) {
            if (auth()->user()->rol === 'administrador') {
                return redirect()->route('pokemons.index');
            } elseif (auth()->user()->rol === 'usuario' && $selectedRole === 'usuario') {
                return redirect()->route('usuarios.index');
            }
        }
        return redirect('/')->with('error', 'Algo ha salido mal.');
    }
}