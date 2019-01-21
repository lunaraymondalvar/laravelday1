<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;

class SampleController extends Controller
{
    public function greetPerson() {

    	$fullname = 
    	[
    		'name' => 'Juan',
    		'middlename' => 'Dela',
    		'lastname' => 'Crus'
    	];
    		return view('sample', compact('fullname'));
    } 

    public function listPerson() {
    
    	$users = Sample::all();

    	return view('users', compact('users'));

    }

}
