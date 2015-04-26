<?php
/**
 * Created by PhpStorm.
 * User: Ves
 * Date: 26/4/15
 * Time: 12:15
 */

use Blog\Post;

class PostTableSeeder extends \Illuminate\Database\Seeder {

	public function run() {
		Post::create(
			[
				'title' => 'My first test post',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores cumque eius fuga saepe. Commodi corporis debitis ducimus ea, eos fuga fugit iste itaque laborum nobis odit placeat quo recusandae.',
				'tags' => 'laravel, test, php basics',
				'photo' => 'http://www.destination360.com/north-america/us/nevada/images/s/nevada-lake-mead.jpg'
			]
		);

		Post::create(
			[
				'title' => 'My first year in SoftUni',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores cumque eius fuga saepe. Commodi corporis debitis ducimus ea, eos fuga fugit iste itaque laborum nobis odit placeat quo recusandae.',
				'tags' => 'laravel, softuni, development, programming',
				'photo' => 'http://www.nakov.com/wp-content/uploads/2014/01/Software-University-Logo-blue-horizontal.png'
			]);
	}
}