<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
class SiteController extends Controller
{
    /**
     * Index method
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $name = "Vinicius";
        $age = 90;
        $lastName = "Silva";

        $data = [
            'name' => $name,
            'age' => $age,
            'lastName' => $lastName
        ];

        return view('bemvindo', $data );
    }

    /**
     * Exit method
     *
     * @return Application|Factory|View
     */
    public function exit()
    {
        return view('sair');
    }

    /**
     * Users method
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function users(Request $request)
    {

        $data = [
            'quantity' => $request->qty
        ];
        return view('users', $data);
    }
}
