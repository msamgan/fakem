<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('welcome')->with([
            'user' => User::randomUser(),
            'histories' => History::history()
        ]);
    }
}
