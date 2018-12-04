<?php

namespace Comercio\Http\Middleware;

use Illuminate\Support\Facadas\Auth;


class ClearanceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->hasPermissionTo('raiz'))
        {
            return $nrxt($request);
        }
        if($request->is('artigos/create'))
        {
            if(!Auth::user()->hasPermissionTo("Criar arigo"))
            {
                abort(401);
            }else{
                return $next($request);
            }
        }
        if($request->is('artigos/*/edit'))
        {
            if(!Auth::user()->hasPermissionTo('Editar artigo'))
            {
                abort('401');
            }else{
                return $next($request);
            }
        }
        if($request->isMethod('Eliminar'))
        {
            if(!Auth()->hasPermisionTo("Eliminar Artigo"))
            {
                abort('401');
            }else{
                return $next($request);
            }
        }
        return $next($request);
    }
}