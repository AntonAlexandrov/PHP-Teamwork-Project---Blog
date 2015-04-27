<?php namespace Blog\Http\Controllers;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \Blog\Post;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function desktop() {
		$posts = \DB::table('posts')->orderBy('id', 'desc')->paginate(10);

		return view('desktop')->with('posts', $posts);
	}

	public function logout() {
		\Auth::logout();

		return \Redirect::route('home');
	}

	public function edit($id) {
		$post = Post::find($id);

		return view('edit') -> with('post', $post);
	}

	public function refresh($id) {
		$p = Post::find($id);

		$p->title = \Input::get('title');
		$p->content = \Input::get('content');
		$p->tags = \Input::get('tags');
		$p->photo = \Input::get('photo');
		$p->resluggify();
		$p->save();

		return \Redirect::route('adminpage');
	}
}
