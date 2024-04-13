<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(): Response
    {
        return response()->view("welcome");
    }

    public function home(): Response
    {
        return response()->view("pages.users.home");
    }
}
