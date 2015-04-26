<?php
/**
 * Created by PhpStorm.
 * User: Ves
 * Date: 26/4/15
 * Time: 12:46
 */

use Blog\User;

class UserTableSeeder extends \Illuminate\Database\Seeder {

	public function run() {

		User::create(
			[
				'name' => 'Ves',
				'email' => 'ves@blog.com',
				'username' => 'bucaner0',
				'password' => Hash::make('secret')
			]
		);
	}
}