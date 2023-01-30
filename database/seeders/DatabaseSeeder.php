<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $permitions = ['create-admin', 'post-management','user-management'];

        foreach ($permitions as $permition){
            Permission::create(
                ['name' => $permition]
            );
        }

        $user_id = $this->createRoleAnduser('Super Admin','Super Admin','superadmin@blog.com');
        $this->createRoleAnduser('Admin','Admin','admin@blog.com');
        $this->createRoleAnduser('Writer','Writer','writer@blog.com');

        Post::factory(100)->create([
            'user_id' => $user_id
        ]);

    }


    private function createRoleAnduser($type,$name,$email){
        $role = Role::where('name',$type)->first();

        if (!$role){
            $role = Role::create([
                'name' => $type,
            ]);
        }
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt('password'),
        ]);
        if($type == 'Super Admin'){
            $role->givePermissionTo(Permission::all());
        }
        if($type == 'Admin'){
            $role->givePermissionTo('post-management');
        }
        $user->assignRole($role);
        return $user;
    }
}


