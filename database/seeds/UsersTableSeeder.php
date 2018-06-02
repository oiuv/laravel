<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = '雪风';
        $user->email = 'i@chenxuefeng.cn';
        $user->password = bcrypt('7300637');
        $user->is_admin = true;
        $user->activated = true;
        $user->save();

        $user = User::find(2);
        $user->name = '夜梦';
        $user->email = 'i@mud.ren';
        $user->password = bcrypt('7300637');
        $user->is_admin = false;
        $user->activated = true;
        $user->save();

        $user = User::find(3);
        $user->name = '哎哟喂';
        $user->email = 'i@oiuv.cn';
        $user->password = bcrypt('7300637');
        $user->is_admin = false;
        $user->activated = true;
        $user->save();
    }
}
