<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'dewanbatara',
		'useremail' => 'dewan.b.h@gmail.com',
		'userpassword' => password_hash('subarjah31', PASSWORD_DEFAULT),
		]);
	}
}
© 2021 GitHub, Inc.