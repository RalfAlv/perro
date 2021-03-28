<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
        return view('home');
    }

    public function todos()
    {
        return view('todos.todohome');
    }
    public function avatar()
    {
        return view('config.avatar');
    }

/*metodo: update, tipo de dato: Request, variable: request*/
    public function update(Request $request)
    {
        Log::info('Image received');
        //2da forma de guardar la imagen
        // dd($request->avatarImage);
        $image = $request->avatarImage->store('avatars', 'public');
        auth()->user()->update(['avatar' => $image]);
        return redirect()->back();

//1er forma de guardar la imagen
      /* $path = $request->file('avatarImage')->store('avatars');
        return $path;*/

    }
}
