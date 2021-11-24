<?php

namespace App\Http\Controllers;

use Database\Factories\ContentFactory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContentController extends Controller
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
        return view('content')->with([
            'paras' => (new ContentFactory())->definition()['content']
        ]);
    }
}
