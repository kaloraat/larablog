<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Blog;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware(['auth', 'admin']);
	}

	public function index() {
		return view('admin.index');
	}

	public function blogs() {
		$publishedBlogs = Blog::where('status', 1)->latest()->get();
		$draftBlogs = Blog::where('status', 0)->latest()->get();
		return view('admin.blogs', compact('publishedBlogs', 'draftBlogs'));
	}
}
