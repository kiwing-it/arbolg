<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {

  public function run()
  {
    /*$user = new s4h\core\User;
    $user->username = 'bartsimpson';
    $user->email = 'bart@gmail.com';
    $user->password = 'Secret1234';
    $user->password_confirmation = 'Secret1234';
    $user->confirmation_code = md5(uniqid(mt_rand(), true));

    if(! $user->save()) {
      Log::info('Unable to create user '.$user->username, (array)$user->errors());
    } else {
      Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
    }

    $user = new s4h\core\User;
    $user->username = 'margesimpson';
    $user->email = 'marge@gmail.com';
    $user->password = 'Secret1234';
    $user->password_confirmation = 'Secret1234';
    $user->confirmation_code = md5(uniqid(mt_rand(), true));

    if(! $user->save()) {
      Log::info('Unable to create user '.$user->username, (array)$user->errors());
    } else {
      Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
    }*/

    $user = new s4h\core\User;
    $user->username = 'milhouse';
    $user->email = 'milhouse@gmail.com';
    $user->password = 'Secret1234';
    $user->password_confirmation = 'Secret1234';
    $user->confirmation_code = md5(uniqid(mt_rand(), true));

    if(! $user->save()) {
      Log::info('Unable to create user '.$user->username, (array)$user->errors());
    } else {
      Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
    }
  }
}
