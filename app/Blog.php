<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $fillable = ['title', 'body', 'featured_image', 'slug', 'meta_title', 'meta_description', 'status'];

	public function category() {
		return $this->belongsToMany(Category::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
}
