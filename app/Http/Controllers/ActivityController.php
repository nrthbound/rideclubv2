<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{

    /**
     * Returns Activity view
     * @return void
     */
    public function view()
    {
        return view('activity');
    }


}
