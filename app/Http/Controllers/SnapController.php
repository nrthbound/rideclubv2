<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnapController extends Controller
{

    /**
     * Show the form to create a new Snap
     * @return view Returns Snap Create view
     */
    public function create()
    {
        return view('snap.create');
    }

}
