<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
            $table->string('name');
            $table->string('affiliation');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->boolean('admin')->default(false);
            $table->boolean('faculty')->default(false);
            $table->boolean('teacher')->default(false);
            $table->boolean('partner')->default(false);
            $table->unsignedInteger('alliance_id')->default(false);
			$table->rememberToken();
			$table->timestamps();
            $table->softDeletes();
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
