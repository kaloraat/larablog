<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Blog::class, 100)->create()->each(function ($blog) {
			$blog->save();
		});
	}
}
