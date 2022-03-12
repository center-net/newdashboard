<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('admins', function (Blueprint $table) {
			$table->bigIncrements('id');
            $table->string('first_name');
			$table->string('last_name');
			$table->string('mobile');
			$table->string('email')->unique();
            $table->string('username')->unique();
			$table->string('photo_profile')->nullable();
			$table->string('password');
            $table->enum('status',['yes', 'no'])->default('yes');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('admins');
	}
}
