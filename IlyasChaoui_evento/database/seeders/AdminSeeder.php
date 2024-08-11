<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $user = User::find(30);
        $role = Role::find($request->id);
        $user->removeRole($user->roles->first());
        $user->assignRole('admin');
    }
}
