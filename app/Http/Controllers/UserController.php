<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitation;
use DataTables;
use Session;

class UserController extends Controller
{
    public function json(){
        return Datatables::of(Invitation::all())->make(true);
    }

    public function index(){
        return view('list_users');
    }
}
