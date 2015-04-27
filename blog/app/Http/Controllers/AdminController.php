<?php namespace Blog\Http\Controllers;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function desktop() {
		return view('desktop');
	}

	public function logout() {
		\Auth::logout();

		return \Redirect::route('home');
	}
}
