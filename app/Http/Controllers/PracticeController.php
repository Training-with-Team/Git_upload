<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function admin()
    {
       return view('Admin.index');
    }

    public function users()
    {
       return view('User.user');
    }

    public function delete()
    {

    }
}
