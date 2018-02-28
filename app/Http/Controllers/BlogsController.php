<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller {
	public function index() {
		$blogs = Blog::all();
		return view('blogs.index', compact('blogs'));
	}

	public function create() {
		return view('blogs.create');
	}

	public function store(Request $request) {
		$input = $request->all();
		$blog = Blog::create($input);
		return redirect('/blogs');
	}
}
