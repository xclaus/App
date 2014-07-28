<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('ID');
			$table->string('NAME');
			$table->string('LAST_NAME');
			$table->string('USER');
			$table->string('PASS');
			$table->string('RUT');
			$table->integer('ID_SUC');
			$table->char('STATUS');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
