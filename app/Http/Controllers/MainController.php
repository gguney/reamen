<?php

namespace App\Http\Controllers;

//use App\User;

class MainController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index($id)
    {
        return View("index");
    }
}