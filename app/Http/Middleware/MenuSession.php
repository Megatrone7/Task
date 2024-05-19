<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Menu;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MenuSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $Menu=Menu::first();

        $variable1 = $Menu->title;
        $variable2 = $Menu->color;
        $variable3 = $Menu->logo;


        session()->put('variable1', $variable1);

        session()->put('variable2', $variable2);
          session()->put('variable3', $variable3);
        return $next($request);
    }
}
