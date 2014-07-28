<?php

class UsersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		$users = [
		['name'=>'Carlos', 'last_name'=>'Mella', 'username'=>'admin', 'password'=> Hash::make('admin'), 'rut'=>'173053053','id_suc'=>'1', 'status'=>'ON'],
		
		];
		
		DB::table('users')->insert($users);
	}

}
