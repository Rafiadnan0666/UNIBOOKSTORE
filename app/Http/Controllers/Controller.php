<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        //
        $buku = Buku::all();
        return view('master.dash', compact('buku'));
    }
}
