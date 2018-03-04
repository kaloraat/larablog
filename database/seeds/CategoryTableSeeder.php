<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$html = new Category();
		$html->name = 'HTML';
		$html->slug = 'html';
		$html->save();

		$css = new Category();
		$css->name = 'CSS';
		$css->slug = 'css';
		$css->save();

		$php = new Category();
		$php->name = 'PHP';
		$php->slug = 'php';
		$php->save();
	}
}
