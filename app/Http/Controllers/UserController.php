<?php

namespace App\Http\Controllers;
use App\Traillers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos['trailers']=Traillers::paginate(6);
        return view('user.index', $datos);
       
    }
}
