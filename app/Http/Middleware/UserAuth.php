<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //$request->session()->get('user')['role'] == 'admin'
    //if($request->path() == "login" && $request->session()->has('user'))
    // return redirect('/');
    // session()->put('message', 'Usuário não tem permissão para este tipo de acesso.');
    // session()->forget('message');

    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('user') && $request->session()->get('user')['role'] == 'admin') {
            $request->session()->forget('message');

            return $next($request);
        } else {

            $request->session()->put('message', 'Apenas usuário administrador possui esse tipo de acesso.');
            $request->session()->forget('user');

            return redirect('/login');
        }

    }
}
