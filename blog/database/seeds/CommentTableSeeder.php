<?php
/**
 * Created by PhpStorm.
 * User: Ves
 * Date: 26/4/15
 * Time: 12:15
 */

use Blog\Comments;

class CommentTableSeeder extends \Illuminate\Database\Seeder {

	public function run() {
		Comments::create(
			[
				'user' => 'ven',
				'content' => 'My first comment'
			]
		);

		Comments::create(
			[
				'user' => 'shlioko',
				'content' => 'uaaaaaaa'
			]);
	}
}