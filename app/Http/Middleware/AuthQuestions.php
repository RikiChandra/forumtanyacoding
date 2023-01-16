<?php

namespace App\Http\Middleware;

use App\Models\Pertanyaan;
use Closure;
use Illuminate\Http\Request;

class AuthQuestions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        // $data = Pertanyaan::first();

        $pertanyaan = Pertanyaan::find($request->route('id'));

        if ($pertanyaan->user->id !== auth()->id()) {
            return redirect()->route('/questions/public');
        }
        return $next($request);
    }
}
