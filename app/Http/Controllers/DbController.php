<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class DbController extends Controller
{
    public function index(){

    	$users = DB::table('db_tables')->get();

    	return view('db.index', ['users' => $users]);
		
    	//dd($users);
    }
}
