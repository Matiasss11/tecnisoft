<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name'                  =>  'Matikov',
            'password'              =>  bcrypt(12345678),
            'remember_token'        =>  bcrypt(12345678),
            'email'                 =>  'admin@email.com',
            /*'foto'                  =>  'matias.jpg',
            'persona_id'            =>  1,
            'estado_id'             =>  1*/

        ]);

        $role = Role::create(['name' => 'Administrador']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user1->assignRole([$role->id]);
        
        $user2=User::create([
            'name'                  =>  'charly93',
            'password'              =>  bcrypt(12345678),
            'remember_token'        =>  bcrypt(12345678),
            'email'                 =>  'elcarlosvillalba@gmail.com',
            /*'foto'                  =>  'default.png',
            'persona_id'            =>  2,
            'estado_id'             =>  1*/
        ]);
        $user2->assignRole([$role->id]);

    }
}
