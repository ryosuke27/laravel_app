<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserEntry;

class UserEntryController extends Controller
{
    function index(){
		$all = UserEntry::all();
		dd($all);
	}
}
