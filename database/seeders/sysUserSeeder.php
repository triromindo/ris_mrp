<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\sys\Role;
use App\Models\sys\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sysUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints(); // menonaktifkan foreign key
        User::truncate(); // hapus data yang ada
        Schema::enableForeignKeyConstraints(); // mengaktifkan foreign key

        ## define data
        $data = [
            [
                'rec_id' => 1,
                'username' => 'sysadmin1',
                'password' => bcrypt('a'),
                'realname' => 'Admin',
                'role_id' => Role::admin,
                'status' => User::active,
                'is_online' => User::is_offline,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        User::insert($data); // insert data by eloquent
    }
}
