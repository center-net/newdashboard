<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('mobile');
			$table->string('address');
			$table->text('note')->nullable();
            $table->foreignId("admin_id")->constrained("admins")->onUpdate("cascade")->onDelete("cascade");
            $table->enum('status',['yes', 'no'])->default('yes');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
