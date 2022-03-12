<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		\App\Models\Admin::create([
			'first_name' => 'admin',
			'last_name' => 'admin',
			'mobile' => '0566907902',
			'username' => 'admin',
			'email' => 'admin@dream.com',
			'password' => bcrypt(123123),
		]);
        \App\Models\Admin::create([
			'first_name' => 'محمد',
			'last_name' => 'النمروطي',
			'mobile' => '0566907903',
			'username' => 'mrpya',
			'email' => 'mrpya@dream.com',
			'password' => bcrypt(123123),
		]);


        \App\Models\Setting::create([
			'sitename_ar' => 'شبكة دريم نت',
			'mobile' => '0595808001',
			'email' => 'admin@dream.com',
		]);

        \App\Models\User::create([
			'first_name' => 'عام',
			'last_name' => 'عام',
			'mobile' => '0000000000',
			'address' => 'عام',
			'admin_id' => '1',
		]);
	}
}
