<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Constructor untuk memastikan user sudah login
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Menampilkan daftar pengguna yang terdaftar
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}