<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(User $user)
    {
    	app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //User::truncate();
        //Role::truncate();


        $usersQuantity = 1;
        //$role = Role::create(["name" => "admin"]);

        
		factory(User::class, $usersQuantity)->create()->each(function ($user) {
	        $user->assignRole('admin');
	    });


        
    }
}
