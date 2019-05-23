<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\models\Role;
use Spatie\Permission\models\Permission;

class RolesandPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset cached roles and permissions
        app()['cache']->forget('´spatie.permission.cache');

        //create permission
        Permission::create(['name'=>'create user']);
    	Permission::create(['name'=>'read user']);
    	Permission::create(['name'=>'update user']);
    	Permission::create(['name'=>'delete user']);

    	Permission::create(['name'=>'create role']);
    	Permission::create(['name'=>'read roles']);
    	Permission::create(['name'=>'update role']);
    	Permission::create(['name'=>'delete role']);	 
		
 		Permission::create(['name'=>'create permission']);
    	Permission::create(['name'=>'read permission']);
    	Permission::create(['name'=>'update permission']);
    	Permission::create(['name'=>'delete permission']);

    	//create roles and assing created permissions

    	$role=Role::create(['name'=> 'ingeniero']);
    	$role->givePermissionTo('read user');
    	$role->givePermissionTo('update user');

    	$role=Role::create(['name'=>'administrador ']);
    	$role->givePermissionTo('create user');
    	$role->givePermissionTo('read user');
    	$role->givePermissionTo('update user');
    	$role->givePermissionTo('delete user');

		$role=Role::create(['name'=> 'lider']);
    	$role->givePermissionTo(Permission::all());

	}

}	